<?php 

if (isset($_GET['id'])) {
	include "/xampp/htdocs/systemhotel/controller/config.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM staffs WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: staff-salary_read.php");
    }


}else if(isset($_POST['ssupdatebtn'])){
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
	$id = validate($_POST['id']);

	if (empty($ssid)) {
		header("Location: view/staffS-update.php?id=$id&error=ID is required");
	}else if (empty($ssname)) {
		header("Location: view/staffS-update.php?id=$id&error=Name is required");
	}else if (empty($ssalary)) {
		header("Location: view/staffS-update.php?id=$id&error=Email is required");
	}else if (empty($sover)) {
		header("Location: view/staffS-update.php?id=$id&error=Phone is required");
	}else if (empty($sbounce)) {
		header("Location: view/staffS-update.php?id=$id&error=Address is required");
	}else if (empty($sdate)) {
		header("Location: view/staffS-update.php?id=$id&error=Address is required");
	}else {

       $sql = "UPDATE staffs SET ssname='$ssname', ssalary='$ssalary', sover='$sover', sbounce='$sbounce', sdate='$sdate' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_staff-salary.php?success=successfully updated");
       }else {
          header("Location: view/staffS-update.php?id=$id&error=unknown error occurred&$staffs_data");
       }
	}
}else {
	header("Location: staff-salary_read.php");
}