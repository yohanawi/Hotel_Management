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

	$sql = "DELETE FROM client
	        WHERE id=$id";
   $result = mysqli_query($connection, $sql);
   if ($result) {
   	  header("Location: ../new_client.php?success=successfully deleted");
   }else {
      header("Location: ../new_client.php?error=unknown error occurred&$client_data");
   }

}else {
	header("Location: ../new_client.php");
}