<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/repair_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/repair_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="rid" > ID </label>
                                <input type="id" name="rid" class="form-control form-control-user" value="<?=$row['rid'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rdes" > Description </label>
                                <input type="text" name="rdes" class="form-control form-control-user" value="<?=$row['rdes'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rfault" > Fault </label>
                                <input type="text" name="rfault" class="form-control form-control-user" value="<?=$row['rfault'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rcost" > Cost </label>
                                <input type="number" name="rcost" class="form-control form-control-user" value="<?=$row['rcost'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rdate" > Date </label>
                                <input type="date" name="rdate" class="form-control form-control-user" value="<?=$row['rdate'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="rupdatebtn">Update</button>
                        <a href="repair.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>