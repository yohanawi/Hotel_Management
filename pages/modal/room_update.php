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

	$sql = "SELECT * FROM room WHERE id=$id";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: room_read.php");
    }


}else if(isset($_POST['roupdatebtn'])){
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
	$id = validate($_POST['id']);

	if (empty($roid)) {
		header("Location: view/room-update.php?id=$id&error=ID is required");
    }else if (empty($rono)) {
        header("Location: view/room-update.php?id=$id&error=Room no is required");
    }else if (empty($rotype)) {
		header("Location: view/room-update.php?id=$id&error=Type is required");
	}else if (empty($rofloor)) {
		header("Location: view/room-update.php?id=$id&error=Floor is required");
    }else if (empty($robe)) {
		header("Location: view/room-update.php?id=$id&error=No beds is required");
    }else if (empty($rocap)) {
		header("Location: view/room-update.php?id=$id&error=Capacity is required");
    }else {

       $sql = "UPDATE room SET rono='$rono', rotype='$rotype', rofloor='$rofloor', robe='$robe', rocap='$rocap' WHERE id=$id ";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../room.php?success=successfully updated");
       }else {
          header("Location: view/room-update.php?id=$id&error=unknown error occurred&$room_data");
       }
	}
}else {
	header("Location: room_read.php");
}