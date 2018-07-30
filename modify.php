<?php

	if(isset($_POST['search'])) {
		$q = "SELECT * FROM members WHERE flight_id = $_POST[flight_id]";
		$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'airline_db'), $q);
		$person = mysqli_fetch_array($result);
	}


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
		echo 'flight has been updated successfully!';
	}
	else {
		if (empty($_POST['modify']) === false && empty($errors) === true) {
			$query = "UPDATE `members` SET `flight_name` = '$_POST[flight_name]', `leaving_from` = '$_POST[leaving_from]', `going_to` = '$_POST[going_to]', `depart_date` = '$_POST[depart_date]', `time` = '$_POST[depart_time]', `dest_time` = '$_POST[arrival_time]', `fare` = '$_POST[fare]' WHERE `flight_id` = '$_POST[flight_id]'";

			mysql_query(mysqli_connect('localhost', 'root', '', 'airline_db'), $query); 
			header('Location: modify.php?success');
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
				Enter the flight id to be modified*:<br>
				<input type="text" name="flight_id" required placeholder="Enter the existing flight id...">
				</li>
				<li>
				<input type="submit" name="search" value="Extract data">
				</li>
			</ul>
		</form>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<ul>
			<li>
			<h2>Modify flight</h2>
			</li>
			<li>
			Flight id*:<br>
			<input type="text" name="flight_id" value="<?php echo $person['flight_id']; ?>">
			</li>
			<li>
			Flight name*:<br>
			<input type="text" name="flight_name" value="<?php echo $person['flight_name']; ?>">
			</li>
			<li>
			Leaving from*:<br>
			<input type="text" name="leaving_from" value="<?php echo $person['leaving_from']; ?>">
			</li>
			<li>
			Going to*:<br>
			<input type="text" name="going_to" value="<?php echo $person['going_to']; ?>"></li>
			<li>
			Departure date*:<br>
			<input type="date" name="depart_date" value="<?php echo $person['depart_date']; ?>">
			</li>
			<li>
			Departure time*:<br>
			<input type="time" name="depart_time" value="<?php echo $person['time']; ?>">
			</li>
			<li>
			Arrival time*:<br>
			<input type="time" name="arrival_time" value="<?php echo $person['dest_time']; ?>">
			</li>
			<li>
			Fare*:<br>
			<input type="number" name="fare" value="<?php echo $person['fare']; ?>">

			</li>
			<li>
			<input type="submit" name="modify" value="Update flight">
			</li>
			</ul>
		</form>
	</body>
</html>
				


	

