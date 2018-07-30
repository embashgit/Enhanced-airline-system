<?php

	// check if user is logged in
	function logged_in() {
		if(isset($_SESSION['login'])){
			return true;
		}
		return false;
	}
	// log user in

	function login($username, $password) {

		$query = "SELECT user_id FROM users WHERE username = '$username' AND password = '$password'";

		$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'airline_db'), $query);
		
		if($result == false){
			return false;
		}

		$num = mysqli_num_rows($result);

		if($num == 1){
			$_SESSION['login'] = "Ok";
			return 1;
		}
		// 	while ($row = mysqli_fetch_assoc($result)) {
	 //        	$user_id = $row['user_id'];
	 //        	$_SESSION['user_id'] = $row['user_id'];
	 //    	}
		// }
	}
 ?>