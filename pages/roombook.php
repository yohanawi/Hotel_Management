<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/roombook_read.php"; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Booking Room</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Booking room</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/roombook_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="brname" > Name </label>
                                <input type="name" name="brname" class="form-control form-control-user" placeholder="Enter Name.." value="<?php if(isset($_GET['brname'])) echo($_GET['brname']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="brnic" > NIC </label>
                                <input type="number" name="brnic" class="form-control form-control-user" placeholder="Enter NIC.." value="<?php if(isset($_GET['brnic'])) echo($_GET['brnic']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="brphone" > Phone </label>
                                <input type="tel" name="brphone" class="form-control form-control-user" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Phone.." value="<?php if(isset($_GET['brphone'])) echo($_GET['brphone']); ?>" required>
                                <small>Format: 077-450-6780</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="brno" > Room no. </label>
                                <input type="number" name="brno" class="form-control form-control-user" placeholder="Enter Room no..." value="<?php if(isset($_GET['brno'])) echo($_GET['brno']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="brpeo" > No.people </label>
                                <input type="number" name="brpeo" class="form-control form-control-user" placeholder="Enter No people.." value="<?php if(isset($_GET['brpeo'])) echo($_GET['brpeo']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="brdate" > Date </label>
                                <input type="date" name="brdate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['brdate'])) echo($_GET['brdate']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="brtdate" > To Date </label>
                                <input type="date" name="brtdate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['brtdate'])) echo($_GET['brtdate']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="brtype" > Type </label>
                                <input type="text" name="brtype" class="form-control form-control-user" placeholder="Enter Type.." value="<?php if(isset($_GET['brtype'])) echo($_GET['brtype']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="brpay" > Payment method </label>
                                <input type="text" name="brpay" class="form-control form-control-user" placeholder="Enter Payment method.." value="<?php if(isset($_GET['brpay'])) echo($_GET['brpay']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="brad" > Advance </label>
                                <input type="number" name="brad" class="form-control form-control-user" placeholder="Enter Advance.." value="<?php if(isset($_GET['brad'])) echo($_GET['brad']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="brinsertbtn" class="btn btn-success btn-flat"> Insert</button>
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
                <th>Name</th>
                <th>NIC</th>
                <th>Phone</th>
                <th>Room no</th>
                <th>No.people</th>
                <th>Date</th>
                <th>To date</th>
                <th>Type</th>
                <th>Payment method</th>
                <th>Advance</th>
                <th>Tools</th>
              </thead>
              <tbody>
              <?php 
			  	      $i = 0;
			  	      while($rows = mysqli_fetch_assoc($result)){
			  	      $i++;
			  	    ?>
                <tr>
                  <td><?=$rows['brname'];?></td>
                  <td><?php echo $rows['brnic']; ?></td>
                  <td><?php echo $rows['brphone']; ?></td>
                  <td><?php echo $rows['brno']; ?></td>
                  <td><?php echo $rows['brpeo']; ?></td>
                  <td><?php echo $rows['brdate']; ?></td>
                  <td><?php echo $rows['brtdate']; ?></td>
                  <td><?php echo $rows['brtype']; ?></td>
                  <td><?php echo $rows['brpay']; ?></td>
                  <td><?php echo $rows['brad']; ?></td>
                  <td>
                    <a href="modal/roombook_delete.php?id=<?=$rows['id']?>"  class="btn btn-danger btn-sm btn-flat delete"><i class='fa fa-trash'></i> Delete</a></button>
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