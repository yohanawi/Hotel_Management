<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/furniture_read.php"; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">furniture</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">furniture</li>
        </ol>
    </div>
    <div class="row">
    <img src="../images/NA_SEP._29.jpg" width="50%">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/furniture_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="fuid" > ID </label>
                                <input type="id" name="fuid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['fuid'])) echo($_GET['fuid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="funame" > Name </label>
                                <input type="name" name="funame" class="form-control form-control-user" placeholder="Enter Name.." value="<?php if(isset($_GET['funame'])) echo($_GET['funame']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fuque" > Quentity </label>
                                <input type="number" name="fuque" class="form-control form-control-user" placeholder="Enter Quentity.." value="<?php if(isset($_GET['fuque'])) echo($_GET['fuque']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fuprice" > Price </label>
                                <input type="number" name="fuprice" class="form-control form-control-user" placeholder="Enter Price.." value="<?php if(isset($_GET['fuprice'])) echo($_GET['fuprice']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fudate" > Date </label>
                                <input type="date" name="fudate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['fudate'])) echo($_GET['fudate']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="fuinsertbtn" class="btn btn-success btn-flat"> Insert</button>
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