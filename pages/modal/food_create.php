<?php 

if (isset($_POST['finsertbtn'])) {
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

	$food_data = 'fid='.$fid. '&fname='.$fname. '&fque='.$fque. '&fprice='.$fprice. '&fdate='.$fdate;

	if (empty($fid)) {
		header("Location: /food.php?error=ID is required&$food_data");
	}else if (empty($fname)) {
		header("Location: /food.php?error=name is required&$food_data");
	}else if (empty($fque)) {
		header("Location: /food.php?error=quentity is required&$food_data");
	}else if (empty($fprice)) {
		header("Location: /food.php?error=price is required&$food_data");
	}else if (empty($fdate)) {
		header("Location: /food.php?error=date is required&$food_data");
	}else {

       $sql = "INSERT INTO food(fid, fname, fque, fprice, fdate) 
               VALUES('$fid', '$fname', '$fque', '$fprice', '$fdate')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_food.php?success=successfully created");
       }else {
          header("Location: ../food.php?error=unknown error occurred&$food_data");
       }
	}

}