<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/staff-salary_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/staff-salary_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="ssid" > Staff ID </label>
                                <input type="id" name="ssid" class="form-control form-control-user" value="<?=$row['ssid'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ssname" > Name </label>
                                <input type="name" name="ssname" class="form-control form-control-user" value="<?=$row['ssname'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ssalary" > Salary </label>
                                <input type="number" name="ssalary" class="form-control form-control-user" value="<?=$row['ssalary'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="sover" > Over time </label>
                                <input type="tetx" name="sover" class="form-control form-control-user" value="<?=$row['sover'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="sbounce" > Bounce </label>
                                <input type="text" name="sbounce" class="form-control form-control-user" value="<?=$row['sbounce'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="sdate" > Date </label> 
                                <input type="date" name="sdate" class="form-control form-control-user" value="<?=$row['sdate'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="ssupdatebtn">Update</button>
                        <a href="manage_staff-salary.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>