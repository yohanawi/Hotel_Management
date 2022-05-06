<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/furniture_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/furniture_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="fuid" > ID </label>
                                <input type="id" name="fuid" class="form-control form-control-user" value="<?=$row['fuid'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="funame" > Name </label>
                                <input type="name" name="funame" class="form-control form-control-user" value="<?=$row['funame'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fuque" > Quentity </label>
                                <input type="number" name="fuque" class="form-control form-control-user" value="<?=$row['fuque'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fuprice" > Price </label>
                                <input type="number" name="fuprice" class="form-control form-control-user" value="<?=$row['fuprice'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="fudate" > Date </label>
                                <input type="date" name="fudate" class="form-control form-control-user" value="<?=$row['fudate'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="fuupdatebtn">Update</button>
                        <a href="manage_furniture.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>