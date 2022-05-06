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

	$sql = "SELECT * FROM beverage WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: beverage_read.php");
    }


}else if(isset($_POST['beupdatebtn'])){
    include "/xampp/htdocs/systemhotel/controller/config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$beid = validate($_POST['beid']);
	$bename = validate($_POST['bename']);
    $betype = validate($_POST['betype']);
    $beprice = validate($_POST['beprice']);
    $bedate = validate($_POST['bedate']);
	$id = validate($_POST['id']);

	if (empty($beid)) {
		header("Location: view/beverage-update.php?id=$id&error=ID is required");
	}else if (empty($bename)) {
		header("Location: view/beverage-update.php?id=$id&error=Name is required");
    }else if (empty($betype)) {
        header("Location: view/beverage-update.php?id=$id&error=Type is required");
	}else if (empty($beprice)) {
		header("Location: view/beverage-update.php?id=$id&error=Price is required");
	}else if (empty($bedate)) {
		header("Location: view/beverage-update.php?id=$id&error=Date is required");
	}else {

       $sql = "UPDATE beverage SET bename='$bename', betype='$betype', beprice='$beprice', bedate='$bedate' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_beverage.php?success=successfully updated");
       }else {
          header("Location: view/beverage-update.php?id=$id&error=unknown error occurred&$beverage_data");
       }
	}
}else {
	header("Location: beverage_read.php");
}