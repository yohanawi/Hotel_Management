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

	$sql = "DELETE FROM roombook
	        WHERE id=$id";
   $result = mysqli_query($connection, $sql);
   if ($result) {
   	  header("Location: ../roombook.php?success=successfully deleted");
   }else {
      header("Location: ../roombook.php?error=unknown error occurred&$roombook_data");
   }

}else {
	header("Location: ../roombook.php");
}