<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/Bill_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/Bill_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="bid" > Bill ID </label>
                                <input type="id" name="bid" class="form-control form-control-user" value="<?=$row['bid'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="bdes" > Bill Description </label>
                                <input type="text" name="bdes" class="form-control form-control-user" value="<?=$row['bdes'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="bcost" > Bill Cost </label>
                                <input type="number" name="bcost" class="form-control form-control-user" value="<?=$row['bcost'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="bdate" > Bill Date </label>
                                <input type="date" name="bdate" class="form-control form-control-user" value="<?=$row['bdate'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="Bupdatebtn">Update</button>
                        <a href="manage_bill.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>