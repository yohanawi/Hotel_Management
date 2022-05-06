<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/menu_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/menu_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="mname" > Name </label>
                                <input type="name" name="mname" class="form-control form-control-user" value="<?=$row['mname'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="mcat" > Categorise </label>
                                <input type="text" name="mcat" class="form-control form-control-user" value="<?=$row['mcat'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="mtype" > Type </label>
                                <input type="text" name="mtype" class="form-control form-control-user" value="<?=$row['mtype'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="mprice" > Price </label>
                                <input type="number" name="mprice" class="form-control form-control-user" value="<?=$row['mprice'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="mupdatebtn">Update</button>
                        <a href="manage_menu.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>