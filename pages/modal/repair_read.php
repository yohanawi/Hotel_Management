<?php  

include "/xampp/htdocs/systemhotel/controller/config.php";

$sql = "SELECT * FROM repair ORDER BY id DESC";
$result = mysqli_query($connection, $sql);