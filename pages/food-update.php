<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/food_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/food_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="fid" > ID </label>
                                <input type="id" name="fid" class="form-control form-control-user" value="<?=$row['fid'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fname" > Name </label>
                                <input type="name" name="fname" class="form-control form-control-user" value="<?=$row['fname'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fque" > Quentity </label>
                                <input type="number" name="fque" class="form-control form-control-user" value="<?=$row['fque'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fprice" > Price </label>
                                <input type="number" name="fprice" class="form-control form-control-user" value="<?=$row['fprice'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fdate" > Date </label>
                                <input type="date" name="fdate" class="form-control form-control-user" value="<?=$row['fdate'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="fupdatebtn">Update</button>
                        <a href="manage_food.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>