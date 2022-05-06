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

	$sql = "SELECT * FROM expense WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: expense_read.php");
    }


}else if(isset($_POST['eupdatebtn'])){
    include "/xampp/htdocs/systemhotel/controller/config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$eid = validate($_POST['eid']);
	$eamout = validate($_POST['eamout']);
    $ereason = validate($_POST['ereason']);
    $epay = validate($_POST['epay']);
    $edate = validate($_POST['edate']);
	$id = validate($_POST['id']);

	if (empty($eid)) {
		header("Location: view/expense-update.php?id=$id&error=ID is required");
	}else if (empty($eamout)) {
		header("Location: view/expense-update.php?id=$id&error=Amount is required");
    }else if (empty($ereason)) {
        header("Location: view/expense-update.php?id=$id&error=Reason is required");
	}else if (empty($epay)) {
		header("Location: view/expense-update.php?id=$id&error=method is required");
	}else if (empty($edate)) {
		header("Location: view/expense-update.php?id=$id&error=Date is required");
	}else {

       $sql = "UPDATE expense SET eamout='$eamout', ereason='$ereason', epay='$epay', edate='$edate' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../expense.php?success=successfully updated");
       }else {
          header("Location: view/expense.php?id=$id&error=unknown error occurred&$expense_data");
       }
	}
}else {
	header("Location: expense_read.php");
}