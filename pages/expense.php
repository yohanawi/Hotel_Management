<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/expense_read.php"; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Expenses</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Expenses</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/expense_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="eid" > ID </label>
                                <input type="id" name="eid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['eid'])) echo($_GET['eid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="eamout" > Amout </label>
                                <input type="number" name="eamout" class="form-control form-control-user" placeholder="Enter Amount.." value="<?php if(isset($_GET['eamout'])) echo($_GET['eamout']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ereason" > Reason </label>
                                <input type="text" name="ereason" class="form-control form-control-user" placeholder="Enter Reason.." value="<?php if(isset($_GET['ereason'])) echo($_GET['ereason']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="epay" > Payment Method </label>
                                <input type="text" name="epay" class="form-control form-control-user" placeholder="Enter Method.." value="<?php if(isset($_GET['epay'])) echo($_GET['epay']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="edate" > Date </label>
                                <input type="date" name="edate" class="form-control form-control-user" placeholder="Enter Date.." value="<?php if(isset($_GET['edate'])) echo($_GET['edate']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="einsertbtn" class="btn btn-success btn-flat"> Insert</button>
                        <button type="reset" class="btn btn-default btn-flat " data-dismiss="modal">Reset</button>
                         <hr>          
                    </form>
                </div>
            </div>
        </div>
        <img src="../images/Wavy_Tech-04_Single-01.jpg" width="50%">
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
                  <td><?=$rows['eid'];?></td>
                  <td><?php echo $rows['eamout']; ?></td>
                  <td><?php echo $rows['ereason']; ?></td>
                  <td><?php echo $rows['epay']; ?></td>
                  <td><?php echo $rows['edate']; ?></td>
                  <td>
                    <a href="expense-update.php?id=<?=$rows['id']?>" class="btn btn-success btn-sm btn-flat edit"><i class='fa fa-edit'></i> Edit</a></button>
                    <a href="modal/expense_delete.php?id=<?=$rows['id']?>"  class="btn btn-danger btn-sm btn-flat delete"><i class='fa fa-trash'></i> Delete</a></button>
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