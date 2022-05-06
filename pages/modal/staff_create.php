<?php 

if (isset($_POST['sinsertbtn'])) {
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

	$staff_data = 'sid='.$sid. '&sname='.$sname. '&semail='.$semail. '&sphone='.$sphone. '&saddress='.$saddress;

	if (empty($sid)) {
		header("Location: /new_staff.php?error=ID is required&$staff_data");
	}else if (empty($sname)) {
		header("Location: /new_staff.php?error=name is required&$staff_data");
	}else if (empty($semail)) {
		header("Location: /new_staff.php?error=email is required&$staff_data");
	}else if (empty($sphone)) {
		header("Location: /new_staff.php?error=phone is required&$staff_data");
	}else if (empty($saddress)) {
		header("Location: /new_staff.php?error=address is required&$staff_data");
	}else {

       $sql = "INSERT INTO staff(sid, sname, semail, sphone, saddress) 
               VALUES('$sid', '$sname', '$semail', '$sphone', '$saddress')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_staff.php?success=successfully created");
       }else {
          header("Location: ../new_staff.php?error=unknown error occurred&$staff_data");
       }
	}

}