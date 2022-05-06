<?php 

if (isset($_POST['beinsertbtn'])) {
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

	$beverage_data = 'beid='.$beid. '&bename='.$bename. '&betype='.$betype. '&beprice='.$beprice. '&bedate='.$bedate;

	if (empty($beid)) {
		header("Location: /beverage.php?error=ID is required&$beverage_data");
	}else if (empty($bename)) {
		header("Location: /beverage.php?error=name is required&$beverage_data");
	}else if (empty($betype)) {
		header("Location: /beverage.php?error=quentity is required&$beverage_data");
	}else if (empty($beprice)) {
		header("Location: /beverage.php?error=price is required&$beverage_data");
	}else if (empty($bedate)) {
		header("Location: /beverage.php?error=date is required&$beverage_data");
	}else {

       $sql = "INSERT INTO beverage(beid, bename, betype, beprice, bedate) 
               VALUES('$beid', '$bename', '$betype', '$beprice', '$bedate')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_beverage.php?success=successfully created");
       }else {
          header("Location: ../beverage.php?error=unknown error occurred&$beverage_data");
       }
	}

}