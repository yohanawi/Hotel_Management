<?php
include('../includes/header.php'); 
include('../includes/navbar1.php'); 
include "/xampp/htdocs/systemhotel/pages/modal/wedding_read.php"; 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Weddings</h1>
        <ol class="breadcrumb">
            <li><a href="#"> Home </a></li>
            <li>&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;</li>
            <li class="active">Weddings</li>
        </ol>
    </div>
    <!--page body-->
    <div class="row">
    <img src="" width="10%">
      <div class="col-xs-12">
        <div class="box">
          <?php if (isset($_GET['success'])) { ?>
		      <div class="alert alert-success" role="alert">
			      <?php echo $_GET['success']; ?>
		      </div>
		      <?php } ?>
          <div class="box-header with-border">
              <a href="wedding.php" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
          </div>&nbsp;&nbsp;
          <div class="box-body">
            <?php if (mysqli_num_rows($result)) { ?>
            <table class="table table-bordered" id="example">
              <thead>
                <th>ID</th>
                <th>Name</th>
                <th>NIC</th>
                <th>Date</th>
                <th>Phone</th>
                <th>Hall</th>
                <th>No.people</th>
                <th>Package</th>
                <th>Menu</th>
                <th>Advance</th>
                <th>Total</th>
                <th>Tools</th>
              </thead>
              <tbody>
              <?php 
			  	      $i = 0;
			  	      while($rows = mysqli_fetch_assoc($result)){
			  	      $i++;
			  	    ?>
                <tr>
                  <td><?=$rows['wid'];?></td>
                  <td><?php echo $rows['wname']; ?></td>
                  <td><?php echo $rows['wnic']; ?></td>
                  <td><?php echo $rows['wdate']; ?></td>
                  <td><?php echo $rows['wphone']; ?></td>
                  <td><?php echo $rows['whall']; ?></td>
                  <td><?php echo $rows['wno']; ?></td>
                  <td><?php echo $rows['wpack']; ?></td>
                  <td><?php echo $rows['wmenu']; ?></td>
                  <td><?php echo $rows['wad']; ?></td>
                  <td><?php echo $rows['wtot']; ?></td>
                  <td>
                    <a href="wedding-update.php?id=<?=$rows['id']?>" class="btn btn-success btn-sm btn-flat edit"><i class='fa fa-edit'></i> Edit</a></button>
                    <a href="modal/wedding_delete.php?id=<?=$rows['id']?>"  class="btn btn-danger btn-sm btn-flat delete"><i class='fa fa-trash'></i> Delete</a></button>
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
