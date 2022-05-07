<?php 

if (isset($_POST['brinsertbtn'])) {
	include "/xampp/htdocs/systemhotel/controller/config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$brname = validate($_POST['brname']);
    $brnic = validate($_POST['brnic']);
    $brphone = validate($_POST['brphone']);
    $brno = validate($_POST['brno']);
    $brpeo = validate($_POST['brpeo']);
    $brdate = validate($_POST['brdate']);
    $brtdate = validate($_POST['brtdate']);
    $brtype = validate($_POST['brtype']);
    $brpay = validate($_POST['brpay']);
    $brad = validate($_POST['brad']);
	
	$roombook_data = '&brname='.$brname. '&brnic='.$brnic. '&brphone='.$brphone. '&brno='.$brno. '&brpeo='.$brpeo. '&brdate='.$brdate. '&brtdate='.$brtdate. '&brtype='.$brtype. '&brpay='.$brpay. '&brad='.$brad;

	if (empty($brname)) {
		header("Location: /roombook.php?error=name is required&$roombook_data");
	}else if (empty($brnic)) {
		header("Location: /roombook.php?error=nic is required&$roombook_data");
	}else if (empty($brphone)) {
		header("Location: /roombook.php?error=phone is required&$roombook_data");
	}else if (empty($brno)) {
		header("Location: /roombook.php?error=room no is required&$roombook_data");
	}else if (empty($brpeo)) {
		header("Location: /roombook.php?error=no people is required&$roombook_data");
	}else if (empty($brdate)) {
		header("Location: /roombook.php?error=date is required&$roombook_data");
	}else if (empty($brtdate)) {
		header("Location: /roombook.php?error=to date is required&$roombook_data");
	}else if (empty($brtype)) {
		header("Location: /roombook.php?error=type is required&$roombook_data");
	}else if (empty($brpay)) {
		header("Location: /roombook.php?error=payment method is required&$roombook_data");
	}else if (empty($brad)) {
		header("Location: /roombook.php?error=advance is required&$roombook_data");
	}else {

       $sql = "INSERT INTO roombook(brname, brnic, brphone, brno, brpeo, brdate, brtdate, brtype, brpay, brad) 
               VALUES('$brname', '$brnic', '$brphone', '$brno', '$brpeo', '$brdate', '$brtdate', '$brtype', '$brpay', '$brad')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../roombook.php?success=successfully created");
       }else {
          header("Location: ../roombook.php?error=unknown error occurred&$roombook_data");
       }
	}

}