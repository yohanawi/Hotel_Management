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

	$sql = "SELECT * FROM furniture WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: furniture_read.php");
    }


}else if(isset($_POST['fuupdatebtn'])){
    include "/xampp/htdocs/systemhotel/controller/config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$fuid = validate($_POST['fuid']);
	$funame = validate($_POST['funame']);
    $fuque = validate($_POST['fuque']);
    $fuprice = validate($_POST['fuprice']);
    $fudate = validate($_POST['fudate']);
	$id = validate($_POST['id']);

	if (empty($fuid)) {
		header("Location: view/furniture-update.php?id=$id&error=ID is required");
	}else if (empty($funame)) {
		header("Location: view/furniture-update.php?id=$id&error=Name is required");
    }else if (empty($fuque)) {
        header("Location: view/furniture-update.php?id=$id&error=Quentity is required");
	}else if (empty($fuprice)) {
		header("Location: view/furniture-update.php?id=$id&error=Price is required");
	}else if (empty($fudate)) {
		header("Location: view/furniture-update.php?id=$id&error=Date is required");
	}else {

       $sql = "UPDATE furniture SET funame='$funame', fuque='$fuque', fuprice='$fuprice', fudate='$fudate' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_furniture.php?success=successfully updated");
       }else {
          header("Location: view/furniture-update.php?id=$id&error=unknown error occurred&$furniture_data");
       }
	}
}else {
	header("Location: furniture_read.php");
}