<?php 

if (isset($_POST['binsertbtn'])) {
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

	$bill_data = 'bid='.$bid. '&bdes='.$bdes. '&bcost='.$bcost. '&bdate='.$bdate;

	if (empty($bid)) {
		header("Location: /bills.php?error=ID is required&$bill_data");
	}else if (empty($bdes)) {
		header("Location: /bills.php?error=description is required&$bill_data");
	}else if (empty($bcost)) {
		header("Location: /bills.php?error=cost is required&$bill_data");
	}else if (empty($bdate)) {
		header("Location: /bills.php?error=date is required&$bill_data");
	}else {

       $sql = "INSERT INTO bill(bid, bdes, bcost, bdate) 
               VALUES('$bid', '$bdes', '$bcost', '$bdate')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_bill.php?success=successfully created");
       }else {
          header("Location: ../bills.php?error=unknown error occurred&$bill_data");
       }
	}

}