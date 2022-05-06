<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/repair_read.php"; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Repairs</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Repairs</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/repair_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="rid" > ID </label>
                                <input type="id" name="rid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['rid'])) echo($_GET['rid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rdes" > Description </label>
                                <input type="text" name="rdes" class="form-control form-control-user" placeholder="Enter Description.." value="<?php if(isset($_GET['rdes'])) echo($_GET['rdes']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rfault" > Fault </label>
                                <input type="text" name="rfault" class="form-control form-control-user" placeholder="Enter Fault.." value="<?php if(isset($_GET['rfault'])) echo($_GET['rfault']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rcost" > Cost </label>
                                <input type="number" name="rcost" class="form-control form-control-user" placeholder="Enter Cost.." value="<?php if(isset($_GET['rcost'])) echo($_GET['rcost']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="rdate" > Date </label>
                                <input type="date" name="rdate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['rdate'])) echo($_GET['rdate']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="rinsertbtn" class="btn btn-success btn-flat"> Insert</button>
                        <button type="reset" class="btn btn-default btn-flat " data-dismiss="modal">Reset</button>
                         <hr>          
                    </form>
                </div>
            </div>
        </div>
        <img src="../images/2840523.jpg" width="50%">
    </div> 

    <div class="row">
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
                <th>Description</th>
                <th>Fault</th>
                <th>Cost</th>
                <th>Date</th>
                <th>Tools</th>
              </thead>
              <tbody>
              <?php 
			  	      $i = 0;
			  	      while($rows = mysqli_fetch_assoc($result)){
			  	      $i++;
			  	    ?>
                <tr>
                  <td><?=$rows['rid'];?></td>
                  <td><?php echo $rows['rdes']; ?></td>
                  <td><?php echo $rows['rfault']; ?></td>
                  <td><?php echo $rows['rcost']; ?></td>
                  <td><?php echo $rows['rdate']; ?></td>
                  <td>
                    <a href="repair-update.php?id=<?=$rows['id']?>" class="btn btn-success btn-sm btn-flat edit"><i class='fa fa-edit'></i> Edit</a></button>
                    <a href="modal/repair_delete.php?id=<?=$rows['id']?>"  class="btn btn-danger btn-sm btn-flat delete"><i class='fa fa-trash'></i> Delete</a></button>
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
</div>

<?php
include('../includes/scripts.php');
include('../includes/footer.php'); 
?>