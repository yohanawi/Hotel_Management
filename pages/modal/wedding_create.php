<?php 

if (isset($_POST['winsertbtn'])) {
	include "/xampp/htdocs/systemhotel/controller/config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $wid = validate($_POST['wid']);
	$wname = validate($_POST['wname']);
	$wnic = validate($_POST['wnic']);
	$wdate = validate($_POST['wdate']);
    $wphone = validate($_POST['wphone']);
    $whall = validate($_POST['whall']);
    $wno = validate($_POST['wno']);
    $wpack = validate($_POST['wpack']);
    $wmenu = validate($_POST['wmenu']);
    $wad = validate($_POST['wad']);
    $wtot = validate($_POST['wtot']);

	$wedding_data = 'wid='.$wid. '&wname='.$wname. '&wnic='.$wnic. '&wdate='.$wdate. '&wphone='.$wphone. '&whall='.$whall. '&wno='.$wno. '&wpack='.$wpack. '&wmenu='.$wmenu. '&wad='.$wad. '&wtot='.$wtot;

	if (empty($wid)) {
		header("Location: /wedding.php?error=ID is required&$wedding_data");
	}else if (empty($wname)) {
		header("Location: /wedding.php?error=name is required&$wedding_data");
	}else if (empty($wnic)) {
		header("Location: /wedding.php?error=nic is required&$wedding_data");
	}else if (empty($wdate)) {
		header("Location: /wedding.php?error=date is required&$wedding_data");
	}else if (empty($wphone)) {
		header("Location: /wedding.php?error=phone is required&$wedding_data");
	}else if (empty($whall)) {
		header("Location: /wedding.php?error=hall is required&$wedding_data");
	}else if (empty($wno)) {
		header("Location: /wedding.php?error=no people is required&$wedding_data");
	}else if (empty($wpack)) {
		header("Location: /wedding.php?error=package is required&$wedding_data");
	}else if (empty($wmenu)) {
		header("Location: /wedding.php?error=menu is required&$wedding_data");
	}else if (empty($wad)) {
		header("Location: /wedding.php?error=advance is required&$wedding_data");
	}else if (empty($wtot)) {
		header("Location: /wedding.php?error=total is required&$wedding_data");
	}else {

       $sql = "INSERT INTO wedding(wid, wname, wnic, wdate, wphone, whall, wno, wpack, wmenu, wad, wtot) 
               VALUES('$wid', '$wname', '$wnic', '$wdate', '$wphone', '$whall', '$wno', '$wpack', '$wmenu', '$wad', '$wtot')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_wedding.php?success=successfully created");
       }else {
          header("Location: ../wedding.php?error=unknown error occurred&$wedding_data");
       }
	}

}