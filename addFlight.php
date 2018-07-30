<?php
	session_start();

	include 'database/connection.php';
			$arrival_dateerr = $fareerr = $dest_timeerr = $leaving_fromerr = $going_toerr = $flightnameerr  = $depart_dateerr = $timeerr = "";

	function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data =htmlspecialchars($data);
	return $data;
	}
	

	if(isset($_POST['submit'])){

		if(empty($_POST['flight_name'])){
			$flightnameerr = " Field is Required";
		}else{
		$flight_name = test_input($_POST['flight_name']);		
		}

		if(empty($_POST['leaving_from'])){
			$leaving_fromerr = " Field is Required";
		}else{
		$leaving_from = test_input($_POST['leaving_from']);		
		}

		if(empty($_POST['going_to'])){
			$going_toerr = "Field is Required";
		}else{
		$going_to = test_input($_POST['going_to']);		
		}
		if(empty($_POST['depart_date'])){
			$depart_dateerr = "Field is Required";
		}else{
		$depart_date = test_input($_POST['depart_date']);		
		}
		if(empty($_POST['dest_time'])){
			$dest_timeerr = "Field is Required";
		}else{
		$dest_time = test_input($_POST['dest_time']);		
		}
		if(empty($_POST['arrival_date'])){
			$arrival_dateerr = "Field is Required";
		}else{
		$arrival_date = test_input($_POST['arrival_date']);		
		}
		if(empty($_POST['time'])){
			$timeerr = "Field is Required";
		}else{
		$time = test_input($_POST['time']);		
		}
		if(empty($_POST['fare'])){
			$fareerr = "Field is Required";
		}else{
		$fare = test_input($_POST['fare']);		
		}
		
		$chk_flt = mysqli_query($link, "select * from members WHERE  flight_name  ='$flight_name' AND leaving_from ='$leaving_from' AND going_to ='$going_to' AND depart_date ='$depart_date'AND time = '$time' AND fare ='$fare' ") or die(mysqli_error($link));
		if(mysqli_num_rows($chk_flt) > 0|| $flightnameerr||$dest_timeerr||$depart_dateerr||$arrival_dateerr||$going_toerr||$leaving_fromerr||$fareerr||$timeerr){
	

	}else{

		$save_user = mysqli_query($link, "INSERT INTO `members` (`flight_name`,`leaving_from`,`going_to`,`dest_time`,`depart_date`,`arrival_date`,`time`, `fare`) VALUES ('$flight_name','$leaving_from', '$going_to','$dest_time', '$depart_date', '$arrival_date', '$time', '$fare')") or die(mysqli_error($link));

		mysqli_query($link, "INSERT INTO `altmembers` (`flight_name`,`leaving_from`,`going_to`,`dest_time`,`depart_date`,`arrival_date`,`time`, `fare`) VALUES ('$flight_name','$leaving_from', '$going_to','$dest_time', '$depart_date', '$arrival_date', '$time', '$fare')")or die(mysqli_error($link));


	if ($save_user){ ?>
		
		<script>alert(" A new Flight has been added");window.location = "index.php";</script>

	<?php }else{ 
		echo '<script type="text/javascript">alert("Failed to Add new Flight ")</script>';
	}
	}
}
	
?>
<html>
	<head>
		<?php 
			include 'head.php';
		?>
		<title>admin</title>
	</head>
	<body>
		<nav>
			<?php 
			include 'adminNav.php';
			?>
		    <ul>
		</nav>
		<div class="container">
			<div class="row">
				<div class="wrapp" style="margin-top: 100px">
					<h2 align="center">Add flights</h2>
					<form action="" method="POST">
			<div class="col-12">

	<div class="col-sm-4">
		<div class="form-group">
		<label for="flight_name" class="control-label">Flight name*:</label>
		<input type="text" class="form-control" name="flight_name" placeholder="Flight name..."/>	
		</div>
		<div class="form-group">
			<label for="leaving_from" class="control-label">Leaving from*:</label>
			<input type="text" class="form-control" name="leaving_from" placeholder="Source...">
		</div>
		<div class="form-group">
			<label for="going_to" class="control-label">Going to*:</label>
			<input type="text" class="form-control" name="going_to" placeholder="Destination..."></li>
		</div>		
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="depart_date" class="control-label">Departure date*:</label>
			<input type="date" class="form-control" name="depart_date"placeholder="mm/dd/yyyy" >
		</div>
		<div class="form-group">
			<label for="depart_time" class="control-label">Departure time*:</label>
			<input type="time" class="form-control" name="time" >
		</div>
		<div class="form-group">
			<label for="arrival_time" class="control-label">Arrival Date*:</label>
			<input type="date" class="form-control" name="arrival_date">
		</div>
		
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label for="arrival_time" class="control-label">Arrival Time*:</label>
			<input type="time" class="form-control" name="dest_time" >
		</div>
		<div class="form-group">
			<label for="" class="">Fare*:</label>
			<input type="number" class="form-control" name="fare" placeholder="The amount...">
		</div>	
	</div>
</div>
	<div align="center" style="margin-top: 20px">
		<input type="submit" class="btn btn-success btn-bg" value="Add Flight" name="submit">
	</div>
			</form>
				</div>
			</div>
		</div>
		
		<?php  
		include 'footer.php';
		?>
	</body>
</html>

