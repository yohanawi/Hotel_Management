<?php
include('../includes/header.php'); 
include('../includes/navbar.php'); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
      <div class="btns">
        <button class="btn1"><a href="login.php">Sign IN</a></button>
        <button class="btn2"><a href="register.php">Sign UP</a></button>
      </div>    
  </div>

  <!-- Content Row -->

  <?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>