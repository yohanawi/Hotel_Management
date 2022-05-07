<?php 

if (isset($_POST['minsertbtn'])) {
	include "/xampp/htdocs/systemhotel/controller/config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$mname = validate($_POST['mname']);
	$mcat = validate($_POST['mcat']);
    $mtype = validate($_POST['mtype']);
    $mprice = validate($_POST['mprice']);

	$menu_data = '&mname='.$mname. '&mcat='.$mcat. '&mtype='.$mtype. '&mprice='.$mprice;

	if (empty($mname)) {
		header("Location: /manage_menu.php?error=name is required&$menu_data");
	}else if (empty($mcat)) {
		header("Location: /manage_menu.php?error=categorise is required&$menu_data");
	}else if (empty($mtype)) {
		header("Location: /manage_menu.php?error=type is required&$menu_data");
	}else if (empty($mprice)) {
		header("Location: /manage_menu.php?error=price is required&$menu_data");
	}else {

       $sql = "INSERT INTO menu(mname, mcat, mtype, mprice) 
               VALUES('$mname', '$mcat', '$mtype', '$mprice')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_menu.php?success=successfully created");
       }else {
          header("Location: ../manage_menu.php?error=unknown error occurred&$menu_data");
       }
	}

}