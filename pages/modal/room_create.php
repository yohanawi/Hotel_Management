<?php 

if (isset($_POST['roinsertbtn'])) {
	include "/xampp/htdocs/systemhotel/controller/config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$roid = validate($_POST['roid']);
	$rono = validate($_POST['rono']);
    $rotype = validate($_POST['rotype']);
    $rofloor = validate($_POST['rofloor']);
    $robe = validate($_POST['robe']);
    $rocap = validate($_POST['rocap']);

	$room_data = '&roid='.$roid. '&rono='.$rono. '&rotype='.$rotype. '&rofloor='.$rofloor. '&robe='.$robe. '&rocap='.$rocap;

	if (empty($roid)) {
		header("Location: /room.php?error=id is required&$room_data");
	}else if (empty($rono)) {
		header("Location: /room.php?error=room no is required&$room_data");
	}else if (empty($rotype)) {
		header("Location: /room.php?error=type is required&$room_data");
	}else if (empty($rofloor)) {
		header("Location: /room.php?error=floor is required&$room_data");
	}else if (empty($robe)) {
		header("Location: /room.php?error=no beds is required&$room_data");
	}else if (empty($rocap)) {
		header("Location: /room.php?error=capacity is required&$room_data");
	}else {

       $sql = "INSERT INTO room(roid, rono, rotype, rofloor, robe, rocap) 
               VALUES('$roid', '$rono', '$rotype', '$rofloor', '$robe', '$rocap')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../room.php?success=successfully created");
       }else {
          header("Location: ../room.php?error=unknown error occurred&$room_data");
       }
	}

}