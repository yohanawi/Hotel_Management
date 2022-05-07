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

	$sql = "SELECT * FROM package WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: package_read.php");
    }


}else if(isset($_POST['paupdatebtn'])){
    include "/xampp/htdocs/systemhotel/controller/config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$paname = validate($_POST['paname']);
    $padec = validate($_POST['padec']);
    $paso = validate($_POST['paso']);
    $pabi = validate($_POST['pabi']);
    $paca = validate($_POST['paca']);
	$id = validate($_POST['id']);

	if (empty($paname)) {
		header("Location: view/package-update.php?id=$id&error=Name is required");
    }else if (empty($padec)) {
        header("Location: view/package-update.php?id=$id&error=Decaration is required");
    }else if (empty($paso)) {
		header("Location: view/package-update.php?id=$id&error=Sound is required");
	}else if (empty($pabi)) {
		header("Location: view/package-update.php?id=$id&error=Bites is required");
    }else if (empty($paca)) {
		header("Location: view/package-update.php?id=$id&error=Cake is required");
    }else {

       $sql = "UPDATE package SET paname='$paname', padec='$padec', paso='$paso', pabi='$pabi', paca='$paca' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../package.php?success=successfully updated");
       }else {
          header("Location: view/package-update.php?id=$id&error=unknown error occurred&$package_data");
       }
	}
}else {
	header("Location: package_read.php");
}