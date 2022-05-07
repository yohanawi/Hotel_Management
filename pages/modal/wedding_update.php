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

	$sql = "SELECT * FROM wedding WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: wedding_read.php");
    }


}else if(isset($_POST['wupdatebtn'])){
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
	$id = validate($_POST['id']);

	if (empty($wid)) {
		header("Location: view/wedding-update.php?id=$id&error=ID is required");
	}else if (empty($wname)) {
		header("Location: view/wedding-update.php?id=$id&error=Name is required");
	}else if (empty($wnic)) {
		header("Location: view/wedding-update.php?id=$id&error=Nic is required");
	}else if (empty($wdate)) {
		header("Location: view/wedding-update.php?id=$id&error=Date is required");
	}else if (empty($wphone)) {
		header("Location: view/wedding-update.php?id=$id&error=Phone is required");
	}else if (empty($whall)) {
		header("Location: view/wedding-update.php?id=$id&error=Hall is required");
	}else if (empty($wno)) {
		header("Location: view/wedding-update.php?id=$id&error=no people is required");
	}else if (empty($wpack)) {
		header("Location: view/wedding-update.php?id=$id&error=packages is required");
	}else if (empty($wmenu)) {
		header("Location: view/wedding-update.php?id=$id&error=Menu is required");
	}else if (empty($wad)) {
		header("Location: view/wedding-update.php?id=$id&error=advance is required");
	}else if (empty($wtot)) {
		header("Location: view/wedding-update.php?id=$id&error=Total is required");
	}else {

       $sql = "UPDATE wedding SET wname='$wname', wnic='$wnic', wdate='$wdate', wphone='$wphone', whall='$whall', wno='$wno', wpack='$wpack', wmenu='$wmenu', wad='$wad', wtot='$wtot' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_wedding.php?success=successfully updated");
       }else {
          header("Location: view/wedding-update.php?id=$id&error=unknown error occurred&$wedding_data");
       }
	}
}else {
	header("Location: wedding_read.php");
}