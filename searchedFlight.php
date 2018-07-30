<?php
	session_start();
	include ('database/connection.php');
	$going_output = array();
	global $going_count;
	global $source_flight;
	global $destination_flight;
	$source_flight = '';
	$destination_flight = '';
	$going_count = 0;

?>
<?php
	if(isset($_POST['search'])) {

		$_SESSION['depart_date'] = $depart_date = $_POST['depart_date'];
		// $return_date = $_POST['return_date'];

		$_SESSION['leaving_from'] = $source_flight = $_POST['leaving_from'];

		$_SESSION['going_to'] =$destination_flight =$_POST['going_to'];


		$check_query = "SELECT * FROM members WHERE leaving_from ='$source_flight' AND going_to='$destination_flight' AND depart_date >= '$depart_date' ";

		$query_going = mysqli_query($link, $check_query) or die("could not search data");
		$going_count = mysqli_num_rows($query_going);

		if($going_count == 0) {

			$going_output[] = 'There was no search results!';

		}else{
		
			while($row = mysqli_fetch_array($query_going)) {
				$flight_from = $row['leaving_from'];
				$flight_to = $row['going_to'];
				$flight_id = $row['flight_id'];
				$depart_date = $row['depart_date'];
				$fare = $row['fare'];
				$_SESSION['depart_time'] = $time = $row['time'];
				$_SESSION['arrival_time'] = $dest_time = $row['dest_time'];
				$_SESSION['fare'] = $fare;
				$going_output[] = $flight_from.' To '.$flight_to.' '."</br>".' '."</br>".' Depart date: '.$depart_date.' '."</br>".' '."</br>".' Depart time: '.$time.' '."</br>".' '."</br>".' Arrival time: '.$dest_time.' '."</br>".' '."</br>".' '."Price: ".' '.$fare.' '."</br>";	
			}
				
		}
	}

?>
<html>

	<?php  
		include 'head.php';
	?>

	<body>

		<?php  
			include 'nav.php';
		?>
		<div class="container" style="margin-top: 45px;">

			<?php if ($going_count > 0 ): ?>
			
			<h1 class="text-center text-primary">Available Flight(s)</h1>

			<div class="row">
				<div class="col-sm-10 col-offset-1">
					<table class="table table-bordered">
					<tr>
						<td>Source</td>
						<td>Destinaion</td>
						<td>Depart Date</td>
						<td>Depart Time</td>
						<td>Arrival Time</td>
						<td>Price </td>
					</tr>
					<tr>
						<td><?php echo $flight_from ?></td>
						<td><?php echo $flight_to ?></td>
						<td><?php echo $depart_date ?></td>
						<td><?php echo $time ?></td>
						<td><?php echo $dest_time ?></td>
						<td><?php echo $fare ?></td>
					</tr>
				</table>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 col-offset-4">
					<div class="well">
						<form action="book.php" method="post">
							<?php $i = 0; while ($i < $going_count): ?>
								<input class="form-control" type="hidden" name="plane" checked="checked" value="<?php echo $going_output[$i] ?>">
							<?php $i = $i+1; endwhile; ?>
							<button class="btn btn-block btn-primary" name="book" type="submit">Book Flight</button>
						</form>
					</div>
				</div>
			</div>
			<?php else:  ?>
				<div class="row" style="font-size: 50px; margin-top: 200px">
					<div class="col-sm-6 col-offset-3">
						<h1 class="text-warning text-center"><strong >Sorry No flight match your search...</strong></h1>
						<div style=" width: 130px; margin: auto;"><button type="button" class="btn btn-lg btn-info"><a href="index.php">back to search</a></button></div>
						<hr>
						<p align="center" style="border:1px solid #333;border-radius: 5px;background: grey;margin-top: 20px;font-size: 15px"><a href="#" style="text-decoration: none; color: #fff" ><i>...Would you like to book in another airline ?.</i> </a></p>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</body>
</html>