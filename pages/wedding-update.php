<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/wedding_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/wedding_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="wid" > ID </label>
                                <input type="id" name="wid" class="form-control form-control-user" value="<?=$row['wid'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wname" > Name </label>
                                <input type="name" name="wname" class="form-control form-control-user" value="<?=$row['wname'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wnic" > NIC </label>
                                <input type="text" name="wnic" class="form-control form-control-user" value="<?=$row['wnic'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wdate" > Date </label>
                                <input type="date" name="wdate" class="form-control form-control-user" value="<?=$row['wdate'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wphone" > Phone </label>
                                <input type="tel" name="wphone" class="form-control form-control-user" value="<?=$row['wphone'] ?>">
                                <small>Format: 077-450-6780</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="whall" > Hall </label>
                                <input type="text" name="whall" class="form-control form-control-user" value="<?=$row['whall'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wno" > No.people </label>
                                <input type="number" name="wno" class="form-control form-control-user" value="<?=$row['wno'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wpack" > Packages </label>
                                <input type="text" name="wpack" class="form-control form-control-user" value="<?=$row['wpack'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wmenu" > Menu </label>
                                <input type="text" name="wmenu" class="form-control form-control-user" value="<?=$row['wmenu'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wad" > Advance </label>
                                <input type="number" name="wad" class="form-control form-control-user" value="<?=$row['wad'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="wtot" > Total </label>
                                <input type="number" name="wtot" class="form-control form-control-user" value="<?=$row['wtot'] ?>">
                            </div>
                        </div>
    
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="wupdatebtn">Update</button>
                        <a href="manage_wedding.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>