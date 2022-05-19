<?php
session_start();
include('../includes/header.php'); 
include('../includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- Outer Row -->
<div class="row justify-content-center">
<img src="../images/6343825.jpg" width="50%">
  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">SIGN IN Here!</h1>
                <?php

                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
                ?>
              </div>

                <form class="user" action="modal/login_code.php" method="POST">

                    <div class="form-group">
                    <input type="username" name="username" class="form-control form-control-user" placeholder="Enter Username..."required>
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password"required>
                    </div>
            
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                    <hr>
                    <p style="text-align:center"> Already haven't Account ? |<a href="register.php"> SIGN UP </a></p>
                </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php
include('../includes/scripts.php'); 
include('../includes/footer.php');
?>