<?php 

if (isset($_POST['rinsertbtn'])) {
	include "/xampp/htdocs/systemhotel/controller/config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $rid = validate($_POST['rid']);
	$rdes = validate($_POST['rdes']);
	$rfault = validate($_POST['rfault']);
    $rcost = validate($_POST['rcost']);
    $rdate = validate($_POST['rdate']);
    
	$repair_data = 'rid='.$rid. '&rdes='.$rdes. '&rfault='.$rfault. '&rcost='.$rcost. '&rdate='.$rdate;

	if (empty($rid)) {
		header("Location: /repair.php?error=ID is required&$repair_data");
	}else if (empty($rdes)) {
		header("Location: /repair.php?error=description is required&$repair_data");
	}else if (empty($rfault)) {
		header("Location: /repair.php?error=fault is required&$repair_data");
	}else if (empty($rcost)) {
		header("Location: /repair.php?error=cost is required&$repair_data");
	}else if (empty($rdate)) {
		header("Location: /repair.php?error=date is required&$repair_data");
	}else {

       $sql = "INSERT INTO repair(rid, rdes, rfault, rcost, rdate) 
               VALUES('$rid', '$rdes', '$rfault', '$rcost', '$rdate')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../repair.php?success=successfully created");
       }else {
          header("Location: ../repair.php?error=unknown error occurred&$repair_data");
       }
	}

}