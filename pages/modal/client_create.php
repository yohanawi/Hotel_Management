<?php 

if (isset($_POST['cinsertbtn'])) {
	include "/xampp/htdocs/systemhotel/controller/config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $cid = validate($_POST['cid']);
	$cname = validate($_POST['cname']);
	$cemail = validate($_POST['cemail']);
    $cphone = validate($_POST['cphone']);
    $caddress = validate($_POST['caddress']);
    $cnic = validate($_POST['cnic']);
    $ccity = validate($_POST['ccity']);

	$client_data = 'cid='.$cid. '&cname='.$cname. '&cemail='.$cemail. '&cphone='.$cphone. '&caddress='.$caddress. '&cnic='.$cnic. '&ccity='.$ccity;

	if (empty($cid)) {
		header("Location: /new_client.php?error=ID is required&$client_data");
	}else if (empty($cname)) {
		header("Location: /new_client.php?error=name is required&$client_data");
	}else if (empty($cemail)) {
		header("Location: /new_client.php?error=email is required&$client_data");
	}else if (empty($cphone)) {
		header("Location: /new_client.php?error=phone is required&$client_data");
	}else if (empty($caddress)) {
		header("Location: /new_client.php?error=address is required&$client_data");
	}else if (empty($cnic)) {
		header("Location: /new_client.php?error=nic is required&$client_data");
	}else if (empty($ccity)) {
		header("Location: /new_client.php?error=city is required&$client_data");
	}else {

       $sql = "INSERT INTO client(cid, cname, cemail, cphone, caddress, cnic, ccity) 
               VALUES('$cid', '$cname', '$cemail', '$cphone', '$caddress', '$cnic', '$ccity')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../new_client.php?success=successfully created");
       }else {
          header("Location: ../new_client.php?error=unknown error occurred&$client_data");
       }
	}

}