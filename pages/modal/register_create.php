<?php 

if (isset($_POST['registerbtn'])) {
	include "/xampp/htdocs/systemhotel/controller/config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
    $username = validate($_POST['username']);
	$email = validate($_POST['email']);
    $password = validate($_POST['password']);

	$register_data = '&name='.$name. '&username='.$username. '&email='.$email. '&password='.$password;

	if (empty($name)) {
		header("Location: /register.php?error=name is required&$register_data");
    }else if (empty($username)) {
        header("Location: /register.php?error=username is required&$register_data");
	}else if (empty($email)) {
		header("Location: /register.php?error=email is required&$register_data");
	}else if (empty($password)) {
		header("Location: /register.php?error=password is required&$register_data");
    }else{

       $sql = "INSERT INTO register( name, username, email, password) 
               VALUES('$name', '$username', '$email', '$password')";
       $result = mysqli_query($connection, $sql);
       if ($result) {
       	  header("Location: ../dashboard.php?success=successfully created");
       }else {
          header("Location: ../register.php?error=unknown error occurred&$register_data");
       }
	}

}
