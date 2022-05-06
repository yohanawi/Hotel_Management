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

	$sql = "SELECT * FROM repair WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: repair_read.php");
    }


}else if(isset($_POST['rupdatebtn'])){
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
	$id = validate($_POST['id']);

	if (empty($rid)) {
		header("Location: view/repair-update.php?id=$id&error=ID is required");
	}else if (empty($rdes)) {
		header("Location: view/repair-update.php?id=$id&error=Description is required");
    }else if (empty($rfault)) {
        header("Location: view/repair-update.php?id=$id&error=Cost is required");
	}else if (empty($rcost)) {
		header("Location: view/repair-update.php?id=$id&error=Cost is required");
	}else if (empty($rdate)) {
		header("Location: view/repair-update.php?id=$id&error=Date is required");
	}else {

       $sql = "UPDATE repair SET rdes='$rdes', rfault='$rfault', rcost='$rcost', rdate='$rdate' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../repair.php?success=successfully updated");
       }else {
          header("Location: view/repair.php?id=$id&error=unknown error occurred&$repair_data");
       }
	}
}else {
	header("Location: repair_read.php");
}