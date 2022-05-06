<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/beverage_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/beverage_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="beid" > ID </label>
                                <input type="id" name="beid" class="form-control form-control-user" value="<?=$row['beid'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="bename" > Name </label>
                                <input type="name" name="bename" class="form-control form-control-user" value="<?=$row['bename'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="betype" > Type </label>
                                <input type="text" name="betype" class="form-control form-control-user" value="<?=$row['betype'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="beprice" > Price </label>
                                <input type="number" name="beprice" class="form-control form-control-user" value="<?=$row['beprice'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="bedate" > Date </label>
                                <input type="date" name="bedate" class="form-control form-control-user" value="<?=$row['bedate'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="beupdatebtn">Update</button>
                        <a href="manage_beverage.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>