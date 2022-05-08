<?php
include('../includes/header.php'); 
include('../includes/navbar.php'); 
?>

<div class="container-fluid">
 <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">SIGN UP Here!</h1>
                </div>
                  <form class="user" action="modal/register_create.php" method="POST">
                    <div class="form-group">
                      <input type="name" name="name" class="form-control form-control-user" placeholder="Enter Full Name.." required>
                    </div>
                    <div class="form-group">
                      <input type="username" name="username" class="form-control form-control-user" placeholder="Enter Username.." required>
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="confirmpassword" class="form-control form-control-user" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group">
			                <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		                </div>
                   <button type="submit" name="registerbtn" class="btn btn-primary btn-user btn-block"> Register </button>
                   <div class="text-center">
                    <button type="reset" class="btn btn-default btn-flat " data-dismiss="modal">Reset</button>
                   </div>
                    <hr>
                    <p style="text-align:center"> Already have Account ? |<a href="login.php"> SIGN IN </a></p>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>        
    <img src="../images/6333213.jpg" alt="register image" width="50%">
  </div>
</div>

<?php
include('../includes/scripts.php'); 
include('../includes/footer.php');
?>