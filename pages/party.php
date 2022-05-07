<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Party</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Party</li>
        </ol>
    </div>
    <div class="row">
    <img src="../images/31769.jpg" width="50%">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/party_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="pid" > ID </label>
                                <input type="id" name="pid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['pid'])) echo($_GET['pid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pname" > Name </label>
                                <input type="name" name="pname" class="form-control form-control-user" placeholder="Enter Name.." value="<?php if(isset($_GET['pname'])) echo($_GET['pname']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pnic" > NIC </label>
                                <input type="text" name="pnic" class="form-control form-control-user" placeholder="Enter NIC.." value="<?php if(isset($_GET['pnic'])) echo($_GET['pnic']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pdate" > Date </label>
                                <input type="date" name="pdate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['pdate'])) echo($_GET['pdate']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pphone" > Phone </label>
                                <input type="tel" name="pphone" class="form-control form-control-user" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Phone.." value="<?php if(isset($_GET['pphone'])) echo($_GET['pphone']); ?>" required>
                                <small>Format: 077-450-6780</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="phall" > Hall </label>
                                <input type="text" name="phall" class="form-control form-control-user" placeholder="Enter Hall.." value="<?php if(isset($_GET['phall'])) echo($_GET['phall']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pno" > No.people </label>
                                <input type="number" name="pno" class="form-control form-control-user" placeholder="Enter No.people.." value="<?php if(isset($_GET['pno'])) echo($_GET['pno']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ppack" > Packages </label>
                                <input type="text" name="ppack" class="form-control form-control-user" placeholder="Enter Package.." value="<?php if(isset($_GET['ppack'])) echo($_GET['ppack']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pmenu" > Menu </label>
                                <input type="text" name="pmenu" class="form-control form-control-user" placeholder="Enter Menu.." value="<?php if(isset($_GET['pmenu'])) echo($_GET['pmenu']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pad" > Advance </label>
                                <input type="number" name="pad" class="form-control form-control-user" placeholder="Enter Advance.." value="<?php if(isset($_GET['pad'])) echo($_GET['pad']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ptot" > Total </label>
                                <input type="number" name="ptot" class="form-control form-control-user" placeholder="Enter Total.." value="<?php if(isset($_GET['ptot'])) echo($_GET['ptot']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="pinsertbtn" class="btn btn-success btn-flat"> Insert</button>
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