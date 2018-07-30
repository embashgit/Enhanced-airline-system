<?php
	if(empty($_POST) === false) {
		$required_fields = array('flight_name', 'leaving_from', 'going_to', 'depart_date', 'depart_time', 'arrival_time','fare');
		foreach($_POST as $key=>$value) {
			if (empty($value) && in_array($key, $required_fields) === true) {
				$errors[] = 'Fields marked with an asterisk are required';
				break 1;
			}
		}
	}

	if (isset($_GET['success']) && empty($_GET['success'])) {
		echo 'flight has been deleted successfully!';
	}
	else{
		if (empty($_POST['delete']) === false && empty($errors) === true) {
			mysqli_query(mysqli_connect('localhost', 'root', '', 'airline_db'), "DELETE FROM members WHERE flight_id = '$_POST[flight_id]'");
			header('Location: deleteFlight.php?success');
			exit();	
		}else if (empty($errors) === false) {
			foreach ($errors as $key => $value) {
				echo "$value"."<br>";
			}
		}
	}

?>	

<html>
	<head>
		<title></title>
	</head>
	<body>
		<nav>
		    <ul>
		        <li><a href="admin.php">Add admin</a></li>
		        <li><a href="addflights.php">Add flight</a></li>
		        <li><a href="modify.php">Modify flight</a></li>
		        <li><a href="delete_flight.php">Delete flight</a></li>
		      
		    </ul>
		</nav>

		<form action="" method="post">
			<ul>

				<li>
				Enter the flight id to be deleted*:<br>
				<input type="text" name="flight_id" required placeholder="Enter the existing flight id...">
				</li>
				<li>
				<input type="submit" name="delete" value="Extract data">
				</li>
			</ul>
		</form>
	</body>
</html>
				