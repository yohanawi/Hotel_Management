<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/income_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/income_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="iid" > ID </label>
                                <input type="id" name="iid" class="form-control form-control-user" value="<?=$row['iid'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="iamout" > Amount </label>
                                <input type="number" name="iamout" class="form-control form-control-user" value="<?=$row['iamout'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ireason" > Reason </label>
                                <input type="text" name="ireason" class="form-control form-control-user" value="<?=$row['ireason'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ipay" > Method </label>
                                <input type="text" name="ipay" class="form-control form-control-user" value="<?=$row['ipay'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="idate" > Date </label>
                                <input type="date" name="idate" class="form-control form-control-user" value="<?=$row['idate'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="iupdatebtn">Update</button>
                        <a href="income.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>