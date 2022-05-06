<?php 

if (isset($_POST['iinsertbtn'])) {
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
    
	$income_data = 'iid='.$iid. '&iamout='.$iamout. '&ireason='.$ireason. '&ipay='.$ipay. '&idate='.$idate;

	if (empty($iid)) {
		header("Location: /income.php?error=ID is required&$income_data");
	}else if (empty($iamout)) {
		header("Location: /income.php?error=amount is required&$income_data");
	}else if (empty($ireason)) {
		header("Location: /income.php?error=reason is required&$income_data");
	}else if (empty($ipay)) {
		header("Location: /income.php?error=payment is required&$income_data");
	}else if (empty($idate)) {
		header("Location: /income.php?error=date is required&$income_data");
	}else {

       $sql = "INSERT INTO income(iid, iamout, ireason, ipay, idate) 
               VALUES('$iid', '$iamout', '$ireason', '$ipay', '$idate')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../income.php?success=successfully created");
       }else {
          header("Location: ../income.php?error=unknown error occurred&$income_data");
       }
	}

}