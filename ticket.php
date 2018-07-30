<?php
	session_start();
	$pass = $_SESSION['booked'];
	$pieces= explode(" ", $pass);

	$leaving_from = $pieces[0];
	$going_to = $pieces[2];
	$depart_date = $pieces[7];
	$depart_time = $pieces[12];
	$arrival_time = $pieces[17];
	$fare = $pieces[22];
	$first_name = $_SESSION['first_name'];
	$visa = $_SESSION['visa'];
?>

<html>
	<?php include('head.php') ?>
	<body>
	<?php include'nav.php' ?>
	<div style="margin-bottom: 20% "></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-offset-1">
					<table class="table table-condensed table-responsive table-striped">
						<tr>
							<td colspan="8">
								<h3 class="text-primary text-center"> Your E-Ticket as on <?php echo date("Y/m/d");?> </h3>
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
						<tr>
							<td>
								<h4 class="text-center text-info tex"> <?php echo $first_name; ?> </h4>
							</td>
							<td>
								<h4 class="text-center text-info"> <?php echo $leaving_from ;?> </h4>
							</td>
							<td>
								<h4 class="text-center text-info"> <?php echo $going_to ;?> </h4>
							</td>
							<td>
								<h4 class="text-center text-info"> <?php echo $depart_date ;?> </h4>
							</td>
							<td>
								<h4 class="text-center text-info"> <?php echo $depart_time ;?> </h4>
							</td>
							<td>
								<h4 class="text-center text-info"> <?php echo $arrival_time ;?> </h4>
							</td>
							<td>
								<h4 class="text-center text-info"> <?php echo $visa ;?> </h4>
							</td>
							<td>
								<h4 class="text-center text-info"> <?php echo $fare ;?> </h4>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>