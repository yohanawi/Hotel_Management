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

	$sql = "SELECT * FROM bill WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: Bill_read.php");
    }


}else if(isset($_POST['Bupdatebtn'])){
    include "/xampp/htdocs/systemhotel/controller/config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$bid = validate($_POST['bid']);
	$bdes = validate($_POST['bdes']);
        $bcost = validate($_POST['bcost']);
        $bdate = validate($_POST['bdate']);
	$id = validate($_POST['id']);

	if (empty($bid)) {
		header("Location: view/Bill-update.php?id=$id&error=ID is required");
	}else if (empty($bdes)) {
		header("Location: view/Bill-update.php?id=$id&error=Description is required");
	}else if (empty($bcost)) {
		header("Location: view/Bill-update.php?id=$id&error=Cost is required");
	}else if (empty($bdate)) {
		header("Location: view/Bill-update.php?id=$id&error=Date is required");
	}else {

       $sql = "UPDATE bill SET bdes='$bdes', bcost='$bcost', bdate='$bdate' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_bill.php?success=successfully updated");
       }else {
          header("Location: view/Bill-update.php?id=$id&error=unknown error occurred&$bill_data");
       }
	}
}else {
	header("Location: Bill_read.php");
}