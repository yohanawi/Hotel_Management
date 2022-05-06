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

	$sql = "SELECT * FROM food WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: food_read.php");
    }


}else if(isset($_POST['fupdatebtn'])){
    include "/xampp/htdocs/systemhotel/controller/config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$fid = validate($_POST['fid']);
	$fname = validate($_POST['fname']);
    $fque = validate($_POST['fque']);
    $fprice = validate($_POST['fprice']);
    $fdate = validate($_POST['fdate']);
	$id = validate($_POST['id']);

	if (empty($fid)) {
		header("Location: view/food-update.php?id=$id&error=ID is required");
	}else if (empty($fname)) {
		header("Location: view/food-update.php?id=$id&error=Name is required");
    }else if (empty($fque)) {
        header("Location: view/food-update.php?id=$id&error=Quentity is required");
	}else if (empty($fprice)) {
		header("Location: view/food-update.php?id=$id&error=Price is required");
	}else if (empty($fdate)) {
		header("Location: view/food-update.php?id=$id&error=Date is required");
	}else {

       $sql = "UPDATE food SET fname='$fname', fque='$fque', fprice='$fprice', fdate='$fdate' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_food.php?success=successfully updated");
       }else {
          header("Location: view/food-update.php?id=$id&error=unknown error occurred&$food_data");
       }
	}
}else {
	header("Location: food_read.php");
}