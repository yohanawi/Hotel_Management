<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/package_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/package_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="paname" > Name </label>
                                <input type="name" name="paname" class="form-control form-control-user" value="<?=$row['paname'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="padec" > Decaration </label>
                                <input type="text" name="padec" class="form-control form-control-user" value="<?=$row['padec'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="paso" > Sound </label>
                                <input type="text" name="paso" class="form-control form-control-user" value="<?=$row['paso'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pabi" > Bites </label>
                                <input type="text" name="pabi" class="form-control form-control-user" value="<?=$row['pabi'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="paca" > Cake </label>
                                <input type="text" name="paca" class="form-control form-control-user" value="<?=$row['paca'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="paupdatebtn">Update</button>
                        <a href="package.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>