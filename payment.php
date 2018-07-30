<?php
session_start();
include("database/connection.php");
	$pass = $_SESSION['booked'];
	$pieces= explode(" ", $pass);

	$leaving_from = $pieces[0];
	$going_to = $pieces[2];
	$depart_date = $pieces[7];
	$depart_time = $pieces[12];
	$arrival_time = $pieces[17];
	$fare = $pieces[22];

	if (isset($_POST['continue'])) {

		$_SESSION['first_name'] = $_POST['first_name'];
		$_SESSION['visa'] = $_POST['visa'];
		$_SESSION['passport'] = $_POST['passport'];
		$_SESSION['address1'] = $_POST['address2'];
		$_SESSION['address2'] = $_POST['address2'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['contact'] = $_POST['contact'];
		$_SESSION['country'] = $_POST['country'];
		$_SESSION['pin'] = $_POST['pin'];

	}

	if (isset($_POST['pay'])){
		if ($_POST['cash'] != $fare) {
			echo '<script>alert(" Pay the Displayed Amount");window.location = "payment.php";</script>';
		}
		else{
			$first_name = $_SESSION['first_name'];
			$visa = $_SESSION['visa'];
			$passport = $_SESSION['passport'];
			$address1 = $_SESSION['address1'];
			$address2 = $_SESSION['address2'];
			$email = $_SESSION['email'];
			$contact = $_SESSION['contact'];
			$country = $_SESSION['country'];
			$pin = $_SESSION['pin'];

			$query_for = "INSERT INTO `passengers` (`first_name`,`visa`,`country`,`address1`,`address2`, `email`,`contact`,`leaving_from`,`going_to`,`depart_date`,`depart_time`,`arrival_time`,`fare`,`passport`,`pin`) VALUES ('$first_name', '$visa', '$country', '$address1','$address2', '$email', '$contact', '$leaving_from', '$going_to', '$depart_date', '$depart_time', '$arrival_time', '$fare', '$passport', '$pin')";
			$altquery_for =mysqli_query($link, "INSERT INTO `altpassengers` (`first_name`,`visa`,`country`,`address1`,`address2`, `email`,`contact`,`leaving_from`,`going_to`,`depart_date`,`depart_time`,`arrival_time`,`fare`,`passport`,`pin`) VALUES ('$first_name', '$visa', '$country', '$address1','$address2', '$email', '$contact', '$leaving_from', '$going_to', '$depart_date', '$depart_time', '$arrival_time', '$fare', '$passport', '$pin')");
				$chk_result = mysqli_query($link, $query_for) or die("Invalid sql");

			if ($chk_result) {
				header ('Location: ticket.php');
			}
		}
	}
?>

<html>
	<?php include('head.php'); ?>
	<body>
		<?php include('nav.php'); ?>

		<div class="container " style="margin-top: 65px;">
			<h2 class=" text-center text-primary"> Make your payment of <?php echo $fare ?> </h2>

			<div class="row">
				<div class="col-sm-6 col-offset-3">
					<div class="well">
						<form class="form-inline" action="payment.php" method="post">
							<div class="form-group">
								<label for="cash">Amount</label>
								<input class="form-control" type="number" id="cash" name="cash" size="8"><br><br>
							</div>
							<button class="btn btn-success btn-block" type="submit" name="pay">Make payment</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

