<?php 

if (isset($_POST['painsertbtn'])) {
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

	$package_data = '&paname='.$paname. '&padec='.$padec. '&paso='.$paso. '&pabi='.$pabi. '&paca='.$paca;

	if (empty($paname)) {
		header("Location: /package.php?error=name is required&$package_data");
	}else if (empty($padec)) {
		header("Location: /package.php?error=decaration is required&$package_data");
	}else if (empty($paso)) {
		header("Location: /package.php?error=sound is required&$package_data");
	}else if (empty($pabi)) {
		header("Location: /package.php?error=bites is required&$package_data");
	}else if (empty($paca)) {
		header("Location: /package.php?error=cake is required&$package_data");
	}else {

       $sql = "INSERT INTO package(paname, padec, paso, pabi, paca) 
               VALUES('$paname', '$padec', '$paso', '$pabi', '$paca')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../package.php?success=successfully created");
       }else {
          header("Location: ../package.php?error=unknown error occurred&$package_data");
       }
	}

}