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

	$sql = "SELECT * FROM income WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: income_read.php");
    }


}else if(isset($_POST['iupdatebtn'])){
    include "/xampp/htdocs/systemhotel/controller/config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$iid = validate($_POST['iid']);
	$iamout = validate($_POST['iamout']);
    $ireason = validate($_POST['ireason']);
    $ipay = validate($_POST['ipay']);
    $idate = validate($_POST['idate']);
	$id = validate($_POST['id']);

	if (empty($iid)) {
		header("Location: view/income-update.php?id=$id&error=ID is required");
	}else if (empty($iamout)) {
		header("Location: view/income-update.php?id=$id&error=Amount is required");
    }else if (empty($ireason)) {
        header("Location: view/income-update.php?id=$id&error=Reason is required");
	}else if (empty($ipay)) {
		header("Location: view/income-update.php?id=$id&error=method is required");
	}else if (empty($idate)) {
		header("Location: view/income-update.php?id=$id&error=Date is required");
	}else {

       $sql = "UPDATE income SET iamout='$iamout', ireason='$ireason', ipay='$ipay', idate='$idate' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../income.php?success=successfully updated");
       }else {
          header("Location: view/income.php?id=$id&error=unknown error occurred&$income_data");
       }
	}
}else {
	header("Location: income_read.php");
}