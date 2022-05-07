<?php  

include "/xampp/htdocs/systemhotel/controller/config.php";

$sql = "SELECT * FROM party ORDER BY id DESC";
$result = mysqli_query($connection, $sql);