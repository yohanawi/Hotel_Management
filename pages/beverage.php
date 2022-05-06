<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/beverage_read.php"; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Beverage</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Beverage</li>
        </ol>
    </div>
    <div class="row">
    <img src="../images/Wavy_Bus-26_Single-03.jpg" width="50%">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/beverage_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="beid" > ID </label>
                                <input type="id" name="beid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['beid'])) echo($_GET['beid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="bename" > Name </label>
                                <input type="name" name="bename" class="form-control form-control-user" placeholder="Enter Name.." value="<?php if(isset($_GET['bename'])) echo($_GET['bename']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="betype" > Type </label>
                                <input type="text" name="betype" class="form-control form-control-user" placeholder="Enter Type.." value="<?php if(isset($_GET['beque'])) echo($_GET['beque']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="beprice" > Price </label>
                                <input type="number" name="beprice" class="form-control form-control-user" placeholder="Enter Price.." value="<?php if(isset($_GET['beprice'])) echo($_GET['beprice']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="bedate" > Date </label>
                                <input type="date" name="bedate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['bedate'])) echo($_GET['bedate']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="beinsertbtn" class="btn btn-success btn-flat"> Insert</button>
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