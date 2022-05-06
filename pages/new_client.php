<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/client_read.php"; 
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
                    <form class="user" action="modal/client_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="cid" > ID </label>
                                <input type="id" name="cid" class="form-control form-control-user" placeholder="Enter ID.." value="<?php if(isset($_GET['cid'])) echo($_GET['cid']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="cname" > Name </label>
                                <input type="name" name="cname" class="form-control form-control-user" placeholder="Enter Name.." value="<?php if(isset($_GET['cname'])) echo($_GET['cname']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="cemail" > Email </label>
                                <input type="email" name="cemail" class="form-control form-control-user" placeholder="Enter Email.." value="<?php if(isset($_GET['cemail'])) echo($_GET['cemail']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="cphone" > Phone </label>
                                <input type="tel" name="cphone" class="form-control form-control-user" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter Phone.." value="<?php if(isset($_GET['cphone'])) echo($_GET['cphone']); ?>" required>
                                <small>Format: 077-450-6780</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="caddress" > Address </label>
                                <input type="address" name="caddress" class="form-control form-control-user" placeholder="Enter Address.." value="<?php if(isset($_GET['caddress'])) echo($_GET['caddress']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="cnic" > NIC </label>
                                <input type="number" name="cnic" class="form-control form-control-user" placeholder="Enter NIC.." value="<?php if(isset($_GET['cnic'])) echo($_GET['cnic']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="ccity" > City </label>
                                <input type="address" name="ccity" class="form-control form-control-user" placeholder="Enter City.." value="<?php if(isset($_GET['ccity'])) echo($_GET['ccity']); ?>" required>
                            </div>
                        </div>
                        <button type="submit" name="cinsertbtn" class="btn btn-success btn-flat"> Insert</button>
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
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>NIC</th>
                <th>City</th>
                <th>Tools</th>
              </thead>
              <tbody>
              <?php 
			  	      $i = 0;
			  	      while($rows = mysqli_fetch_assoc($result)){
			  	      $i++;
			  	    ?>
                <tr>
                  <td><?=$rows['cid'];?></td>
                  <td><?php echo $rows['cname']; ?></td>
                  <td><?php echo $rows['cemail']; ?></td>
                  <td><?php echo $rows['cphone']; ?></td>
                  <td><?php echo $rows['caddress']; ?></td>
                  <td><?php echo $rows['cnic']; ?></td>
                  <td><?php echo $rows['ccity']; ?></td>
                  <td>
                    <a href="modal/client_delete.php?id=<?=$rows['id']?>"  class="btn btn-danger btn-sm btn-flat delete"><i class='fa fa-trash'></i> Delete</a></button>
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