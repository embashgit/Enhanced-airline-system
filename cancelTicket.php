  <?php

	if (isset($_POST['cancel'])) {
		$query = "SELECT * FROM passengers WHERE visa = '$_POST[pin]'";
	    $result = mysqli_query(mysqli_connect('localhost', 'root', '', 'airline_db'), $query);

		while($row = mysqli_fetch_array($result)){ 
			echo "&nbsp;<br> Dear&nbsp;";
			echo '<b>';
			echo $row['first_name'];
			echo '</b>';
			echo "! &nbsp;<BR>As per the <b>term and conditions </b> 23% amount will be deducted from the paid amount and you will be paid with RS.";

			echo ($row['fare'] + $row['grand_fare']) -(($row['fare'] + $row['grand_fare'])*0.23);
			echo '<br>';
			
		}
		if(mysqli_query(mysqli_connect('localhost', 'root', '', 'airline_db'), "DELETE FROM passengers WHERE visa = '$_POST[pin]'")){
			echo "ticket has successfully been canceled";
		}else{
			echo "something went wrong";
		}
	}
?>

<html>
	<head>
		<title>Cancel Ticket</title>
	</head>
	<body>
		<h2>Ticket cancellation</h2>

		<form action="" method="post">
			<ul>

				<li>
					PIN*:<br>
					<input type="text" name="pin" required placeholder="Enter the given PIN...">
				</li>
				<li>
					<input type="submit" name="cancel" value="Proceed">
				</li>

			</ul>
		</form>
	</body>
</html>


