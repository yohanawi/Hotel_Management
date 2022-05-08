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
                    <form class="user" action="modal/staff-salary_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="ssid" > Staff ID </label>
                                <input type="id" name="ssid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['ssid'])) echo($_GET['ssid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ssname" > Name </label>
                                <input type="name" name="ssname" class="form-control form-control-user" placeholder="Enter Name.." value="<?php if(isset($_GET['ssname'])) echo($_GET['ssname']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ssalary" > Salary </label>
                                <input type="number" name="ssalary" class="form-control form-control-user" placeholder="Enter Salary.." value="<?php if(isset($_GET['ssalary'])) echo($_GET['ssalary']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="sover" > Over time </label>
                                <input type="tetx" name="sover" class="form-control form-control-user" placeholder="Enter Overtime.." value="<?php if(isset($_GET['sover'])) echo($_GET['sover']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="sbounce" > Bounce </label>
                                <input type="text" name="sbounce" class="form-control form-control-user" placeholder="Enter Bounce.." value="<?php if(isset($_GET['sbounce'])) echo($_GET['sbounce']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="sdate" > Date </label>
                                <input type="date" name="sdate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['sdate'])) echo($_GET['sdate']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="ssinsertbtn" class="btn btn-success btn-flat"> Insert</button>
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