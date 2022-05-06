<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/staff_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/staff_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="sid" > Staff ID </label>
                                <input type="id" name="sid" class="form-control form-control-user" value="<?=$row['sid'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="sname" > Name </label>
                                <input type="name" name="sname" class="form-control form-control-user" value="<?=$row['sname'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="semail" > Email </label>
                                <input type="email" name="semail" class="form-control form-control-user" value="<?=$row['semail'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="sphone" > Phone </label>
                                <input type="tel" name="sphone" class="form-control form-control-user" value="<?=$row['sphone'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="saddress" > Address </label>
                                <input type="address" name="saddress" class="form-control form-control-user" value="<?=$row['saddress'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="supdatebtn">Update</button>
                        <a href="manage_staff.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>