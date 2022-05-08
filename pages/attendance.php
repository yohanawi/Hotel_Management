<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/attendance_read.php"; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">New Client</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">New Client</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/attendance_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="aid" > ID </label>
                                <input type="id" name="aid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['aid'])) echo($_GET['aid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="aname" > Name </label>
                                <input type="name" name="aname" class="form-control form-control-user" placeholder="Enter Name.." value="<?php if(isset($_GET['aname'])) echo($_GET['aname']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="adate" > Date </label>
                                <input type="date" name="adate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['adate'])) echo($_GET['adate']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="aontime" > On Time </label>
                                <input type="time" name="aontime" class="form-control form-control-user" placeholder="Enter Ontime.." value="<?php if(isset($_GET['aontime'])) echo($_GET['aontime']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="aouttime" > Out Time </label>
                                <input type="time" name="aouttime" class="form-control form-control-user" placeholder="Enter Out time.." value="<?php if(isset($_GET['outtime'])) echo($_GET['outtime']); ?>" required>
                            </div>
                        </div>
                    
                        <button type="submit" name="ainsertbtn" class="btn btn-success btn-flat"> Insert</button>
                        <button type="reset" class="btn btn-default btn-flat " data-dismiss="modal">Reset</button>
                         <hr>          
                    </form>
                </div>
            </div>
        </div>
        <img src="../images/8370.jpg" width="50%">
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
                <th>Name</th>
                <th>Date</th>
                <th>On time</th>
                <th>Out time</th>
                <th>Tools</th>
              </thead>
              <tbody>
              <?php 
			  	      $i = 0;
			  	      while($rows = mysqli_fetch_assoc($result)){
			  	      $i++;
			  	    ?>
                <tr>
                  <td><?=$rows['aid'];?></td>
                  <td><?php echo $rows['aname']; ?></td>
                  <td><?php echo $rows['adate']; ?></td>
                  <td><?php echo $rows['aontime']; ?></td>
                  <td><?php echo $rows['aouttime']; ?></td>
                  <td>
                    <a href="modal/attendance_delete.php?id=<?=$rows['id']?>"  class="btn btn-danger btn-sm btn-flat delete"><i class='fa fa-trash'></i> Delete</a></button>
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