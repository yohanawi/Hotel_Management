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

	$sql = "SELECT * FROM party WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: party_read.php");
    }


}else if(isset($_POST['pupdatebtn'])){
    include "/xampp/htdocs/systemhotel/controller/config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $pid = validate($_POST['pid']);
	$pname = validate($_POST['pname']);
	$pnic = validate($_POST['pnic']);
	$pdate = validate($_POST['pdate']);
    $pphone = validate($_POST['pphone']);
    $phall = validate($_POST['phall']);
    $pno = validate($_POST['pno']);
    $ppack = validate($_POST['ppack']);
    $pmenu = validate($_POST['pmenu']);
    $pad = validate($_POST['pad']);
    $ptot = validate($_POST['ptot']);
	$id = validate($_POST['id']);

	if (empty($pid)) {
		header("Location: view/party-update.php?id=$id&error=ID is required");
	}else if (empty($pname)) {
		header("Location: view/party-update.php?id=$id&error=Name is required");
	}else if (empty($pnic)) {
		header("Location: view/party-update.php?id=$id&error=Nic is required");
	}else if (empty($pdate)) {
		header("Location: view/party-update.php?id=$id&error=Date is required");
	}else if (empty($pphone)) {
		header("Location: view/party-update.php?id=$id&error=Phone is required");
	}else if (empty($phall)) {
		header("Location: view/party-update.php?id=$id&error=Hall is required");
	}else if (empty($pno)) {
		header("Location: view/party-update.php?id=$id&error=no people is required");
	}else if (empty($ppack)) {
		header("Location: view/party-update.php?id=$id&error=packages is required");
	}else if (empty($pmenu)) {
		header("Location: view/party-update.php?id=$id&error=Menu is required");
	}else if (empty($pad)) {
		header("Location: view/party-update.php?id=$id&error=advance is required");
	}else if (empty($ptot)) {
		header("Location: view/party-update.php?id=$id&error=Total is required");
	}else {

       $sql = "UPDATE party SET pname='$pname', pnic='$pnic', pdate='$pdate', pphone='$pphone', phall='$phall', pno='$pno', ppack='$ppack', pmenu='$pmenu', pad='$pad', ptot='$ptot' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_party.php?success=successfully updated");
       }else {
          header("Location: view/party-update.php?id=$id&error=unknown error occurred&$party_data");
       }
	}
}else {
	header("Location: party_read.php");
}