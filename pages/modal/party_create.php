<?php 

if (isset($_POST['pinsertbtn'])) {
	include "/xampp/htdocs/systemhotel/controller/config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $pid = validate($_POST['pid']);
	$pname = validate($_POST['pname']);
	$pnic = validate($_POST['pnic']);
	$pdate = validate($_POST['pdate']);
    $pphone = validate($_POST['pphone']);
    $phall = validate($_POST['phall']);
    $pno = validate($_POST['pno']);
    $ppack = validate($_POST['ppack']);
    $pmenu = validate($_POST['pmenu']);
    $pad = validate($_POST['pad']);
    $ptot = validate($_POST['ptot']);

	$party_data = 'pid='.$pid. '&pname='.$pname. '&pnic='.$pnic. '&pdate='.$pdate. '&pphone='.$pphone. '&phall='.$phall. '&pno='.$pno. '&ppack='.$ppack. '&pmenu='.$pmenu. '&pad='.$pad. '&ptot='.$ptot;

	if (empty($pid)) {
		header("Location: /party.php?error=ID is required&$party_data");
	}else if (empty($pname)) {
		header("Location: /party.php?error=name is required&$party_data");
	}else if (empty($pnic)) {
		header("Location: /party.php?error=nic is required&$party_data");
	}else if (empty($pdate)) {
		header("Location: /party.php?error=date is required&$party_data");
	}else if (empty($pphone)) {
		header("Location: /party.php?error=phone is required&$party_data");
	}else if (empty($phall)) {
		header("Location: /party.php?error=hall is required&$party_data");
	}else if (empty($pno)) {
		header("Location: /party.php?error=no people is required&$party_data");
	}else if (empty($ppack)) {
		header("Location: /party.php?error=package is required&$party_data");
	}else if (empty($pmenu)) {
		header("Location: /party.php?error=menu is required&$party_data");
	}else if (empty($pad)) {
		header("Location: /party.php?error=advance is required&$party_data");
	}else if (empty($ptot)) {
		header("Location: /party.php?error=total is required&$party_data");
	}else {

       $sql = "INSERT INTO party(pid, pname, pnic, pdate, pphone, phall, pno, ppack, pmenu, pad, ptot) 
               VALUES('$pid', '$pname', '$pnic', '$pdate', '$pphone', '$phall', '$pno', '$ppack', '$pmenu', '$pad', '$ptot')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../manage_party.php?success=successfully created");
       }else {
          header("Location: ../party.php?error=unknown error occurred&$party_data");
       }
	}

}