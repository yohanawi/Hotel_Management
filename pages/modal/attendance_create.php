<?php 

if (isset($_POST['ainsertbtn'])) {
	include "/xampp/htdocs/systemhotel/controller/config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $aid = validate($_POST['aid']);
	$aname = validate($_POST['aname']);
	$adate = validate($_POST['adate']);
    $aontime = validate($_POST['aontime']);
    $aouttime = validate($_POST['aouttime']);

	$attendance_data = 'aid='.$aid. '&aname='.$aname. '&adate='.$adate. '&aontime='.$aontime. '&aouttime='.$aouttime;

	if (empty($aid)) {
		header("Location: /attendance.php?error=ID is required&$attendance_data");
	}else if (empty($aname)) {
		header("Location: /attendance.php?error=name is required&$attendance_data");
	}else if (empty($adate)) {
		header("Location: /attendance.php?error=date is required&$attendance_data");
	}else if (empty($aontime)) {
		header("Location: /attendance.php?error=on time is required&$attendance_data");
	}else if (empty($aouttime)) {
		header("Location: /attendance.php?error=out time is required&$attendance_data");
	}else {

       $sql = "INSERT INTO attendance(aid, aname, adate, aontime, aouttime ) 
               VALUES('$aid', '$aname', '$adate', '$aontime', '$aouttime')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../attendance.php?success=successfully created");
       }else {
          header("Location: ../attendance.php?error=unknown error occurred&$attendance_data");
       }
	}

}