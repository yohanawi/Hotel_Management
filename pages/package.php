<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/package_read.php"; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Packages</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Packages</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="p-5">
                <div class="text-center">
                    <form class="user" action="modal/package_create.php" method="POST">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
			                    <?php echo $_GET['error']; ?>
		                    </div>
		                <?php } ?>
                        <div class="form-group">
                            <div class="row">
                                <label for="paname" > Name </label>
                                <input type="name" name="paname" class="form-control form-control-user" placeholder="Enter Name.." value="<?php if(isset($_GET['paname'])) echo($_GET['paname']); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="padec" > Decaration </label>
                                <input type="text" name="padec" class="form-control form-control-user" placeholder="Enter Decaration.." value="<?php if(isset($_GET['padec'])) echo($_GET['padec']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="paso" > Sound </label>
                                <input type="text" name="paso" class="form-control form-control-user" placeholder="Enter Sound.." value="<?php if(isset($_GET['paso'])) echo($_GET['paso']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="pabi" > Bites </label>
                                <input type="text" name="pabi" class="form-control form-control-user" placeholder="Enter Bites.." value="<?php if(isset($_GET['pabi'])) echo($_GET['pabi']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="paca" > Cake </label>
                                <input type="text" name="paca" class="form-control form-control-user" placeholder="Enter Cake.." value="<?php if(isset($_GET['paca'])) echo($_GET['paca']); ?>">
                            </div>
                        </div>
                        <button type="submit" name="painsertbtn" class="btn btn-success btn-flat"> Insert</button>
                        <button type="reset" class="btn btn-default btn-flat " data-dismiss="modal">Reset</button>
                         <hr>          
                    </form>
                </div>
            </div>
        </div>
        <img src="../images/pack.png" width="50%">
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
                <th>Decaration</th>
                <th>Sound</th>
                <th>Bites</th>
                <th>Cake</th>
                <th>Tools</th>
              </thead>
              <tbody>
              <?php 
			  	      $i = 0;
			  	      while($rows = mysqli_fetch_assoc($result)){
			  	      $i++;
			  	    ?>
                <tr>
                  <td><?=$rows['paname'];?></td>
                  <td><?php echo $rows['padec']; ?></td>
                  <td><?php echo $rows['paso']; ?></td>
                  <td><?php echo $rows['pabi']; ?></td>
                  <td><?php echo $rows['paca']; ?></td>
                  <td>
                  <a href="package-update.php?id=<?=$rows['id']?>" class="btn btn-success btn-sm btn-flat edit"><i class='fa fa-edit'></i> Edit</a></button>  
                    <a href="modal/package_delete.php?id=<?=$rows['id']?>"  class="btn btn-danger btn-sm btn-flat delete"><i class='fa fa-trash'></i> Delete</a></button>
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