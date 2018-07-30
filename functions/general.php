<?php 


	// redirect user if logged in already
	function logged_in_redirect() {
		if (logged_in() === true) {
			header('Location: index.php');
			exit();
		}
	}

	//protect a page
	function protect_page() {
		if (logged_in() === false) {
			header('Location: protected.php');
			exit();
		}
	}

	

 ?>