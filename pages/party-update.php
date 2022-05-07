<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/party_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/party_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="pid" > ID </label>
                                <input type="id" name="pid" class="form-control form-control-user" value="<?=$row['pid'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pname" > Name </label>
                                <input type="name" name="pname" class="form-control form-control-user" value="<?=$row['pname'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pnic" > NIC </label>
                                <input type="text" name="pnic" class="form-control form-control-user" value="<?=$row['pnic'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pdate" > Date </label>
                                <input type="date" name="pdate" class="form-control form-control-user" value="<?=$row['pdate'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pphone" > Phone </label>
                                <input type="tel" name="pphone" class="form-control form-control-user" value="<?=$row['pphone'] ?>">
                                <small>Format: 077-450-6780</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="phall" > Hall </label>
                                <input type="text" name="phall" class="form-control form-control-user" value="<?=$row['phall'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pno" > No.people </label>
                                <input type="number" name="pno" class="form-control form-control-user" value="<?=$row['pno'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ppack" > Packages </label>
                                <input type="text" name="ppack" class="form-control form-control-user" value="<?=$row['ppack'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pmenu" > Menu </label>
                                <input type="text" name="pmenu" class="form-control form-control-user" value="<?=$row['pmenu'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pad" > Advance </label>
                                <input type="number" name="pad" class="form-control form-control-user" value="<?=$row['pad'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ptot" > Total </label>
                                <input type="number" name="ptot" class="form-control form-control-user" value="<?=$row['ptot'] ?>">
                            </div>
                        </div>
    
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="pupdatebtn">Update</button>
                        <a href="manage_party.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>