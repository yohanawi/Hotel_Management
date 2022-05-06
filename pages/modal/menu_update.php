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

	$sql = "SELECT * FROM menu WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: menu_read.php");
    }


}else if(isset($_POST['mupdatebtn'])){
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
	$id = validate($_POST['id']);

	if (empty($mname)) {
		header("Location: view/menu-update.php?id=$id&error=Name is required");
    }else if (empty($mcat)) {
        header("Location: view/menu-update.php?id=$id&error=categories is required");
    }else if (empty($mtype)) {
		header("Location: view/menu-update.php?id=$id&error=menu is required");
	}else if (empty($mprice)) {
		header("Location: view/menu-update.php?id=$id&error=Price is required");
    }else {

       $sql = "UPDATE menu SET mname='$mname', mcat='$mcat', mtype='$mtype', mprice='$mprice' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_menu.php?success=successfully updated");
       }else {
          header("Location: view/menu-update.php?id=$id&error=unknown error occurred&$menu_data");
       }
	}
}else {
	header("Location: menu_read.php");
}