<?php
include('../includes/header.php'); 
include('../includes/navbar.php'); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Contact US</h1>
  </div>

  <!-- Content Row -->
    <div class="row" style="padding-left: 100px;">
        <form action="#" style="padding-right: 50px;">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
            </div>
            <br>
            <div class="form-group">
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px; width:460px;"></textarea>
            </div>
            <br>
            <input type="submit" value="Submit" class="btn btn-success">
        </form>

        <img src="../images/5138237.jpg" width="450px">
    </div>
    <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>

  <!-- Content Row -->

  <?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>