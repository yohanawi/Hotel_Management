<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/room_read.php"; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rooms</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Rooms</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/room_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="roid" > ID </label>
                                <input type="id" name="roid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['roid'])) echo($_GET['roid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rono" > Room.no </label>
                                <input type="number" name="rono" class="form-control form-control-user" placeholder="Enter Room no.." value="<?php if(isset($_GET['rono'])) echo($_GET['rono']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rotype" > Type </label>
                                <input type="text" name="rotype" class="form-control form-control-user" placeholder="Enter Type.." value="<?php if(isset($_GET['rotype'])) echo($_GET['rotype']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rofloor" > Floor </label>
                                <input type="number" name="rofloor" class="form-control form-control-user" placeholder="Enter Floor.." value="<?php if(isset($_GET['rofloor'])) echo($_GET['rofloor']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="robe" > No.beds </label>
                                <input type="number" name="robe" class="form-control form-control-user" placeholder="Enter No.Beds.." value="<?php if(isset($_GET['robe'])) echo($_GET['robe']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rocap" > Capacity </label>
                                <input type="text" name="rocap" class="form-control form-control-user" placeholder="Enter Capacity.." value="<?php if(isset($_GET['rocap'])) echo($_GET['rocap']); ?>">
                            </div>
                        </div>
                        <button type="submit" name="roinsertbtn" class="btn btn-success btn-flat"> Insert</button>
                        <button type="reset" class="btn btn-default btn-flat " data-dismiss="modal">Reset</button>
                         <hr>          
                    </form>
                </div>
            </div>
        </div>
        <img src="../images/10811.jpg" width="50%">
    </div> 

    <img src="" width="10%">
      <div class="col-xs-12">
        <div class="box">
          <?php if (isset($_GET['success'])) { ?>
		      <div class="alert alert-success" role="alert">
			      <?php echo $_GET['success']; ?>
		      </div>
		      <?php } ?>
          <div class="box-body">
            <?php if (mysqli_num_rows($result)) { ?>
            <table class="table table-bordered" id="example">
              <thead>
                <th>ID</th>
                <th>Room.no</th>
                <th>Type</th>
                <th>Floor</th>
                <th>No.beds</th>
                <th>Capacity</th>
                <th>Tools</th>
              </thead>
              <tbody>
              <?php 
			  	      $i = 0;
			  	      while($rows = mysqli_fetch_assoc($result)){
			  	      $i++;
			  	    ?>
                <tr>
                  <td><?=$rows['roid'];?></td>
                  <td><?php echo $rows['rono']; ?></td>
                  <td><?php echo $rows['rotype']; ?></td>
                  <td><?php echo $rows['rofloor']; ?></td>
                  <td><?php echo $rows['robe']; ?></td>
                  <td><?php echo $rows['rocap']; ?></td>
                  <td>
                  <a href="room-update.php?id=<?=$rows['id']?>" class="btn btn-success btn-sm btn-flat edit"><i class='fa fa-edit'></i> Edit</a></button>  
                    <a href="modal/room_delete.php?id=<?=$rows['id']?>"  class="btn btn-danger btn-sm btn-flat delete"><i class='fa fa-trash'></i> Delete</a></button>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            <?php } ?>
          </div>
        </div>
      </div>
</div>

<?php
include('../includes/scripts.php');
include('../includes/footer.php'); 
?>