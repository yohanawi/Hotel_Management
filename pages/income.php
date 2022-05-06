<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/income_read.php"; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Incomes</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Incomes</li>
        </ol>
    </div>
    <div class="row">
    <img src="../images/NA_SEP._29.jpg" width="50%">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/income_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="iid" > ID </label>
                                <input type="id" name="iid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['iid'])) echo($_GET['iid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="iamout" > Amount </label>
                                <input type="number" name="iamout" class="form-control form-control-user" placeholder="Enter Amount.." value="<?php if(isset($_GET['iamout'])) echo($_GET['iamout']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ireason" > Reason </label>
                                <input type="text" name="ireason" class="form-control form-control-user" placeholder="Enter Reason.." value="<?php if(isset($_GET['ireason'])) echo($_GET['ireason']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ipay" > Payment Method </label>
                                <input type="text" name="ipay" class="form-control form-control-user" placeholder="Enter Method.." value="<?php if(isset($_GET['ipay'])) echo($_GET['ipay']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="idate" > Date </label>
                                <input type="date" name="idate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['idate'])) echo($_GET['idate']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="iinsertbtn" class="btn btn-success btn-flat"> Insert</button>
                        <button type="reset" class="btn btn-default btn-flat " data-dismiss="modal">Reset</button>
                         <hr>          
                    </form>
                </div>
            </div>
        </div>
       
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
                <th>Amount</th>
                <th>Reason</th>
                <th>Method</th>
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
                  <td><?=$rows['iid'];?></td>
                  <td><?php echo $rows['iamout']; ?></td>
                  <td><?php echo $rows['ireason']; ?></td>
                  <td><?php echo $rows['ipay']; ?></td>
                  <td><?php echo $rows['idate']; ?></td>
                  <td>
                    <a href="income-update.php?id=<?=$rows['id']?>" class="btn btn-success btn-sm btn-flat edit"><i class='fa fa-edit'></i> Edit</a></button>
                    <a href="modal/income_delete.php?id=<?=$rows['id']?>"  class="btn btn-danger btn-sm btn-flat delete"><i class='fa fa-trash'></i> Delete</a></button>
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