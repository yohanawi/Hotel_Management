<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/expense_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/expense_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="eid" > ID </label>
                                <input type="id" name="eid" class="form-control form-control-user" value="<?=$row['eid'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="eamout" > Amount </label>
                                <input type="number" name="eamout" class="form-control form-control-user" value="<?=$row['eamout'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ereason" > Reason </label>
                                <input type="text" name="ereason" class="form-control form-control-user" value="<?=$row['ereason'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="epay" > Method </label>
                                <input type="text" name="epay" class="form-control form-control-user" value="<?=$row['epay'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="edate" > Date </label>
                                <input type="date" name="edate" class="form-control form-control-user" value="<?=$row['edate'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="eupdatebtn">Update</button>
                        <a href="expense.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>