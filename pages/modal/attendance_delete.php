<?php  

if(isset($_GET['id'])){
   include "/xampp/htdocs/systemhotel/controller/config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM attendance
	        WHERE id=$id";
   $result = mysqli_query($connection, $sql);
   if ($result) {
   	  header("Location: ../attendance.php?success=successfully deleted");
   }else {
      header("Location: ../attendance.php?error=unknown error occurred&$attendance_data");
   }

}else {
	header("Location: ../attendance.php");
}