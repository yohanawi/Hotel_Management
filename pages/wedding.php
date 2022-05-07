<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Weddings</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Weddings</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/wedding_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="wid" > ID </label>
                                <input type="id" name="wid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['wid'])) echo($_GET['wid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wname" > Name </label>
                                <input type="name" name="wname" class="form-control form-control-user" placeholder="Enter Name.." value="<?php if(isset($_GET['wname'])) echo($_GET['wname']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wnic" > NIC </label>
                                <input type="text" name="wnic" class="form-control form-control-user" placeholder="Enter NIC.." value="<?php if(isset($_GET['wnic'])) echo($_GET['wnic']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wdate" > Date </label>
                                <input type="date" name="wdate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['wdate'])) echo($_GET['wdate']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wphone" > Phone </label>
                                <input type="tel" name="wphone" class="form-control form-control-user" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Phone.." value="<?php if(isset($_GET['wphone'])) echo($_GET['wphone']); ?>" required>
                                <small>Format: 077-450-6780</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="whall" > Hall </label>
                                <input type="text" name="whall" class="form-control form-control-user" placeholder="Enter Hall.." value="<?php if(isset($_GET['whall'])) echo($_GET['whall']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wno" > No.people </label>
                                <input type="number" name="wno" class="form-control form-control-user" placeholder="Enter No.people.." value="<?php if(isset($_GET['wno'])) echo($_GET['wno']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wpack" > Packages </label>
                                <input type="text" name="wpack" class="form-control form-control-user" placeholder="Enter Package.." value="<?php if(isset($_GET['wpack'])) echo($_GET['wpack']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wmenu" > Menu </label>
                                <input type="text" name="wmenu" class="form-control form-control-user" placeholder="Enter Menu.." value="<?php if(isset($_GET['wmenu'])) echo($_GET['wmenu']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wad" > Advance </label>
                                <input type="number" name="wad" class="form-control form-control-user" placeholder="Enter Advance.." value="<?php if(isset($_GET['wad'])) echo($_GET['wad']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wtot" > Total </label>
                                <input type="number" name="wtot" class="form-control form-control-user" placeholder="Enter Total.." value="<?php if(isset($_GET['wtot'])) echo($_GET['wtot']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="winsertbtn" class="btn btn-success btn-flat"> Insert</button>
                        <button type="reset" class="btn btn-default btn-flat " data-dismiss="modal">Reset</button>
                         <hr>          
                    </form>
                </div>
            </div>
        </div>
        <img src="../images/20945904.jpg" width="50%">
    </div> 
</div>

<?php
include('../includes/scripts.php');
include('../includes/footer.php'); 
?>