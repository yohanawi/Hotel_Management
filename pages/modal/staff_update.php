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

	$sql = "SELECT * FROM staff WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: staff_read.php");
    }


}else if(isset($_POST['supdatebtn'])){
    include "/xampp/htdocs/systemhotel/controller/config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$sid = validate($_POST['sid']);
	$sname = validate($_POST['sname']);
    $semail = validate($_POST['semail']);
    $sphone = validate($_POST['sphone']);
    $saddress = validate($_POST['saddress']);
	$id = validate($_POST['id']);

	if (empty($sid)) {
		header("Location: view/staff-update.php?id=$id&error=ID is required");
	}else if (empty($sname)) {
		header("Location: view/staff-update.php?id=$id&error=Name is required");
	}else if (empty($semail)) {
		header("Location: view/staff-update.php?id=$id&error=Email is required");
	}else if (empty($sphone)) {
		header("Location: view/staff-update.php?id=$id&error=Phone is required");
	}else if (empty($saddress)) {
		header("Location: view/staff-update.php?id=$id&error=Address is required");
	}else {

       $sql = "UPDATE staff SET sname='$sname', semail='$semail', sphone='$sphone', saddress='$saddress' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_staff.php?success=successfully updated");
       }else {
          header("Location: view/staff-update.php?id=$id&error=unknown error occurred&$staff_data");
       }
	}
}else {
	header("Location: staff_read.php");
}