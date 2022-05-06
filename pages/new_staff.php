<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">New Staff</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">New Staff</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/staff_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="sid" > Staff ID </label>
                                <input type="id" name="sid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['sid'])) echo($_GET['sid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="sname" > Name </label>
                                <input type="name" name="sname" class="form-control form-control-user" placeholder="Enter Name.." value="<?php if(isset($_GET['sname'])) echo($_GET['sname']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="semail" > Email </label>
                                <input type="email" name="semail" class="form-control form-control-user" placeholder="Enter Email.." value="<?php if(isset($_GET['semail'])) echo($_GET['semail']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="sphone" > Phone </label>
                                <input type="tel" name="sphone" class="form-control form-control-user" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Phone.." value="<?php if(isset($_GET['sphone'])) echo($_GET['sphone']); ?>" required>
                                <small>Format: 077-450-6780</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="saddress" > Address </label>
                                <input type="address" name="saddress" class="form-control form-control-user" placeholder="Enter Address.." value="<?php if(isset($_GET['saddress'])) echo($_GET['saddress']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="sinsertbtn" class="btn btn-success btn-flat"> Insert</button>
                        <button type="reset" class="btn btn-default btn-flat " data-dismiss="modal">Reset</button>
                         <hr>          
                    </form>
                </div>
            </div>
        </div>
        <img src="../images/Mobile-login-Cristina.jpg" width="50%">
    </div> 
</div>

<?php
include('../includes/scripts.php');
include('../includes/footer.php'); 
?>