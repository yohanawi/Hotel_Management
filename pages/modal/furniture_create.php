<?php 

if (isset($_POST['fuinsertbtn'])) {
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

	$furniture_data = 'fuid='.$fuid. '&funame='.$funame. '&fuque='.$fuque. '&fuprice='.$fuprice. '&fudate='.$fudate;

	if (empty($fuid)) {
		header("Location: /furniture.php?error=ID is required&$furniture_data");
	}else if (empty($funame)) {
		header("Location: /furniture.php?error=name is required&$furniture_data");
	}else if (empty($fuque)) {
		header("Location: /furniture.php?error=quentity is required&$furniture_data");
	}else if (empty($fuprice)) {
		header("Location: /furniture.php?error=price is required&$furniture_data");
	}else if (empty($fudate)) {
		header("Location: /furniture.php?error=date is required&$furniture_data");
	}else {

       $sql = "INSERT INTO furniture(fuid, funame, fuque, fuprice, fudate) 
               VALUES('$fuid', '$funame', '$fuque', '$fuprice', '$fudate')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_furniture.php?success=successfully created");
       }else {
          header("Location: ../furniture.php?error=unknown error occurred&$furniture_data");
       }
	}

}