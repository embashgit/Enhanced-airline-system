<?php
	include ('database/connection.php');

	session_start();
	
?>

<html>
<title>ARS | search flight</title>
	<?php include 'head.php' ?>
	<body>
	<?php include'nav.php' ?>
	<div style="margin-bottom: 20% "></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-offset-2">
					<?php
					$_SESSION['visa'] = $searchvisa = $_POST['visa'];
		$query = "SELECT * FROM passengers WHERE visa = '$_POST[visa]' ";
		 $altquery = mysqli_query($link, "SELECT * FROM altpassengers WHERE visa = '$searchvisa'")or die(mysql_error($link));
		$quickvisa = mysqli_num_rows($altquery);
	    $result = mysqli_query($link, $query);
	    if (mysqli_num_rows($result)>0) {?>
	    	<div align="center"><button onclick="PrintElem('#print_trip')" class="btn btn-primary">Print Trips</button></div>
	    	<div id="ticket">

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
			<?php
			while($row = mysqli_fetch_array($result)){
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
				<?php }else{ ?>
					
						<h1 class="text-warning text-center"><strong >Sorry!! Ticket with visa Number <?php echo $searchvisa;  echo ($quickvisa> 0 ? " has been cancelled due to some technical issues": " have not been booked") ?> </strong></h1>
						<div style=" width: 130px; margin: auto;"><a href="index.php"><button type="button" class="btn btn-lg btn-info">Search Available Flight</button></a></div>
						<hr>
					
				<?php } ?>
				<?php if (mysqli_num_rows($altquery) > 0 && mysqli_num_rows($result) < 1) { ?>
					<hr>
							<div style="margin-top: 30px"><p align="center" style="border:1px solid #333;border-radius: 5px;background: grey;margin-top: 20px;font-size: 20px;color: #eee" ><i>Due to change of schedules flight with  visa no. <?php echo $searchvisa; ?> have been booked for you on quickflight.com </i><span><a href="quickflight_ticket.php"><button align="center" class="btn btn-warning">checkout your new ticket</button></a></span></p>
								
							</div>

						<?php } ?>
						
			
			</div>
			</div>
		</div>
	</body>
</html>