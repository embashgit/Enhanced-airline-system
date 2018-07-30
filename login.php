<?php 
	
	session_start();

	include 'database/connection.php';
	include 'functions/users.php';

	$login_key = 0;
	if (isset($_POST['submit'])) {


		
	
		$_SESSION['username']  = $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
		$_SESSION['password'] = $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
		
		$result = login($username, $password);

		if($result != false){
			if ($useranme !='admin') {
				header('location:addFlight.php');
			}else{
				header('location:index.php');
			}
			exit();
		}else{
			$errors[] = "invalid username or password";
		}
	}else{
		$errors[] = "no data received";
	}	

	if (empty($errors) == false){
		echo "<h2>We tried to log you in, but...</h2>"."<br>";
		echo $errors[0];
	}
 ?>