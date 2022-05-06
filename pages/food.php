<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/food_read.php"; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Food Item</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Food Item</li>
        </ol>
    </div>
    <div class="row">
    <img src="../images/Wavy_Bus-26_Single-03.jpg" width="50%">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/food_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="fid" > ID </label>
                                <input type="id" name="fid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['fid'])) echo($_GET['fid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fname" > Name </label>
                                <input type="name" name="fname" class="form-control form-control-user" placeholder="Enter Name.." value="<?php if(isset($_GET['fname'])) echo($_GET['fname']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fque" > Quentity </label>
                                <input type="number" name="fque" class="form-control form-control-user" placeholder="Enter Quentity.." value="<?php if(isset($_GET['fque'])) echo($_GET['fque']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fprice" > Price </label>
                                <input type="number" name="fprice" class="form-control form-control-user" placeholder="Enter Price.." value="<?php if(isset($_GET['fprice'])) echo($_GET['fprice']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fdate" > Date </label>
                                <input type="date" name="fdate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['fdate'])) echo($_GET['fdate']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="finsertbtn" class="btn btn-success btn-flat"> Insert</button>
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