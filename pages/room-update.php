<?php 
include('../includes/header.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/room_update.php";
?>

<body>
<!-- Begin Page Content -->
<div class="container">
    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <div class="row">               
                    <form class="user" action="modal/room_update.php" method="POST">
                        <h4 class="display-4 text-center">Update</h4><hr><br>
                        <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="roid" > ID </label>
                                <input type="id" name="roid" class="form-control form-control-user" value="<?=$row['roid'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rono" > No.room </label>
                                <input type="number" name="rono" class="form-control form-control-user" value="<?=$row['rono'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rotype" > Type </label>
                                <input type="text" name="rotype" class="form-control form-control-user" value="<?=$row['rotype'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rofloor" > Floor </label>
                                <input type="number" name="rofloor" class="form-control form-control-user" value="<?=$row['rofloor'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="robe" > No.beds </label>
                                <input type="number" name="robe" class="form-control form-control-user" value="<?=$row['robe'] ?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rocap" > Capacity </label>
                                <input type="text" name="rocap" class="form-control form-control-user" value="<?=$row['rocap'] ?>" >
                            </div>
                        </div>
                        <input type="text" name="id" value="<?=$row['id']?>" hidden>

                        <button type="submit" class="btn btn-primary" name="roupdatebtn">Update</button>
                        <a href="room.php" class="link-primary">View</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../includes/scripts.php');
?>