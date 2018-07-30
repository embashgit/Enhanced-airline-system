<?php
	include ('database/connection.php');

	session_start();
?>
<title>QF |flight ticket</title>
	<?php include 'head.php' ?>
	<body>
	<?php include'qnav.php';
	//$result = $_SESSION['quickf'];

	$result = mysqli_query($link, "SELECT * FROM altpassengers WHERE visa = '".$_SESSION['visa']."'")or die(mysqli_error($link));
	 ?>

	<div style="margin-bottom: 20% "></div>
	<div class="container">
	
			<div class="row">
				<div class="col-sm-8 col-offset-2">
					<table class="table table-condensed table-responsive table-striped">
			<tr>
				<td colspan="8">
					<h3 class="text-primary text-center"> Your E-Ticket as on <?php echo date("Y-m-d");?> </h3>
				</td>
			</tr>
			<tr>
				<td class="text-primary text-center">
					<h4> Name </h4>
				</td>
				<td class="text-primary text-center">
					<h4>Location</h4>
				</td>
				<td class="text-primary text-center">
					<h4>Destination</h4>
				</td>
				<td class="text-primary text-center">
					<h4>Depart Date</h4>
				</td>
				<td class="text-primary text-center">
					<h4>Depart Time</h4>
				</td>
				<td class="text-primary text-center">
					<h4>Arrival Time</h4>
				</td>
				<td class="text-primary text-center">
					<h4>Visa Number</h4>
				</td>
				<td class="text-primary text-center">
					<h4>Paid Amount</h4>
				</td>
			</tr>
			<?php while($row = mysqli_fetch_array($result)){
			?>

			<tr>

				<td>
					<h4 class="text-center text-info tex"> <?php echo $row['first_name']; ?> </h4>
				</td>
				<td>
					<h4 class="text-center text-info"> <?php echo $row['leaving_from'] ;?> </h4>
				</td>
				<td>
					<h4 class="text-center text-info"> <?php echo $row['going_to'] ;?> </h4>
				</td>
				<td>
					<h4 class="text-center text-info"> <?php echo $row['depart_date'] ;?> </h4>
				</td>
				<td>
					<h4 class="text-center text-info"> <?php echo $row['depart_time'] ;?> </h4>
				</td>
				<td>
					<h4 class="text-center text-info"> <?php echo $row['arrival_time'] ;?> </h4>
				</td>
				<td>
					<h4 class="text-center text-info"> <?php echo $row['visa'];?> </h4>
				</td>
				<td>
					<h4 class="text-center text-info"> <?php echo $row['fare'];?> </h4>
				</td>
			</tr>
			<?php } ?>
		</table>

				</div>
		
	
