<?php
session_start();
include('config.php');

if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: config.php");
}
?>