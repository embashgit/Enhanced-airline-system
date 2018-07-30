<?php 
	include 'database/connection.php';
	if(isset($_POST['submit'])){

		$username		= $_POST['username'];
		$password		= $_POST['password'];
		$first_name		= $_POST['fname'];
		$last_name		= $_POST['sname'];
		$email			= $_POST['email'];

		$query = "INSERT INTO users(username, password, first_name, last_name, email) VALUES('$username', '$password', '$first_name', '$last_name', '$email') ";

		$chk_result = mysqli_query($link, $query) or die("Invalid sql");

		if($chk_result){
			header("Location:index.php");
		}
	}

 ?>