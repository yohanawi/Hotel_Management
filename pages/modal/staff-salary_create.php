<?php 

if (isset($_POST['ssinsertbtn'])) {
	include "/xampp/htdocs/systemhotel/controller/config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $ssid = validate($_POST['ssid']);
	$ssname = validate($_POST['ssname']);
    $ssalary = validate($_POST['ssalary']);
    $sover = validate($_POST['sover']);
    $sbounce = validate($_POST['sbounce']);
    $sdate = validate($_POST['sdate']);
	

	$staffs_data = 'ssid='.$ssid. '&ssname='.$ssname. '&ssalary='.$ssalary. '&sover='.$sover. '&sbounce='.$sbounce. '&sdate='.$sdate;

	if (empty($ssid)) {
		header("Location: /Staff-salary.php?error=ID is required&$staffs_data");
	}else if (empty($ssname)) {
		header("Location: /Staff-salary.php?error=name is required&$staffs_data");
	}else if (empty($ssalary)) {
		header("Location: /Staff-salary.php?error=salary is required&$staffs_data");
	}else if (empty($sover)) {
		header("Location: /Staff-salary.php?error=overtime is required&$staffs_data");
	}else if (empty($sbounce)) {
		header("Location: /Staff-salary.php?error=bounce is required&$staffs_data");
	}else if (empty($sdate)) {
		header("Location: /Staff-salaryf.php?error=date is required&$staffs_data");
	}else {

       $sql = "INSERT INTO staffs(ssid, ssname, ssalary, sover, sbounce, sdate) 
               VALUES('$ssid', '$ssname', '$ssalary', '$sover', '$sbounce', '$sdate')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_staff-salary.php?success=successfully created");
       }else {
          header("Location: ../Staff-salary.php?error=unknown error occurred&$staffs_data");
       }
	}

}