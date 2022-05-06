<?php 

if (isset($_POST['einsertbtn'])) {
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

	$expense_data = 'eid='.$eid. '&eamout='.$eamout. '&ereason='.$ereason. '&epay='.$epay. '&edate='.$edate;

	if (empty($eid)) {
		header("Location: /expense.php?error=ID is required&$expense_data");
	}else if (empty($eamout)) {
		header("Location: /expense.php?error=amount is required&$expense_data");
	}else if (empty($ereason)) {
		header("Location: /expense.php?error=reason is required&$expense_data");
	}else if (empty($epay)) {
		header("Location: /expense.php?error=payment is required&$expense_data");
	}else if (empty($edate)) {
		header("Location: /expense.php?error=date is required&$expense_data");
	}else {

       $sql = "INSERT INTO expense(eid, eamout, ereason, epay, edate) 
               VALUES('$eid', '$eamout', '$ereason', '$epay', '$edate')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../expense.php?success=successfully created");
       }else {
          header("Location: ../expense.php?error=unknown error occurred&$expense_data");
       }
	}

}