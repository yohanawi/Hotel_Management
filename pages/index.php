<?php
include('../includes/header.php'); 
include('../includes/navbar.php'); 
?>

<style>

.home{

  display: flex;

  background: url("../images/WhatsApp Image 2022-03-08 at 01.01.06.jpeg") no-repeat center;

  height: 100vh;

  color: #fff;

  min-height: 500px;

  background-size: cover;

  background-attachment: fixed;

  font-family: 'Ubuntu', sans-serif;

}

.center {

  display: flex;

  justify-content: center;

  align-items: center;

  height: 700px;

  width: 1350px;

}

</style>
<!-- Begin Page Content -->

<div class="container-fluid">





  <!-- Content Row -->

  <section class="home" id="home">

        <div class="max-width">

            <div class="home-content">

              <div class="center">

                <button onclick="document.location='login.php'" class="btn btn-info" style="width: 200px;">Sign IN</button>&nbsp;&nbsp;&nbsp;&nbsp;

                <button onclick="document.location='register.php'" class="btn btn-info" style="width: 200px;">Sign UP</button>

              </div>            

            </div>

        </div>

    </section>  

  <!-- Content Row -->


 

  <?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>