<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bills</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Bills</li>
        </ol>
    </div>
    <div class="row">
        <img src="../images/3266883.jpg" width="50%">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/Bill_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="bid" > Bill ID </label>
                                <input type="id" name="bid" class="form-control form-control-user" placeholder="Enter Bill ID.."  value="<?php if(isset($_GET['bid'])) echo($_GET['bid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="bdes" > Description </label>
                                <input type="text" name="bdes" class="form-control form-control-user" placeholder="Enter Description.." value="<?php if(isset($_GET['bdes'])) echo($_GET['bdes']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="bcost" > Cost </label>
                                <input type="number" name="bcost" class="form-control form-control-user" placeholder="Enter Cost.." value="<?php if(isset($_GET['bcost'])) echo($_GET['bcost']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="bdate" > Date </label>
                                <input type="date" name="bdate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['bdate'])) echo($_GET['bdate']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="binsertbtn"  class="btn btn-success btn-flat"> Insert</button>
                        <button type="reset" class="btn btn-default btn-flat " data-dismiss="modal">Reset</button>
                         <hr>          
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('../includes/scripts.php');
include('../includes/footer.php');
?>