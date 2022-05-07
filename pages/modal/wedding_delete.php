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

	$sql = "DELETE FROM wedding
	        WHERE id=$id";
   $result = mysqli_query($connection, $sql);
   if ($result) {
   	  header("Location: ../manage_wedding.php?success=successfully deleted");
   }else {
      header("Location: ../manage_wedding.php?error=unknown error occurred&$wedding_data");
   }

}else {
	header("Location: ../manage_wedding.php");
}