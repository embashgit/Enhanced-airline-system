<?php
	session_start();

	if(isset($_POST['book'])){
		$_SESSION['booked'] = $_POST['plane'];
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
		<div class="midheader">
			<h3 >Use BIZZNG 20 to get 20% off on your first flight booking  <span class="fb"><a href="#"" class="btn btn-danger btn-lg ">BooK Now!</a></span></h3>			
		</div>
			<div class="maindiv2" style="padding-top: 40px;">
				<div class="row">
				<div class=" col-sm-6 col-offset-3">
					<h1 style="color: white" class="text-center">Please Enter Your Details</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 col-offset-4">
					<div class="well" style="color: white; background: #283593; background:rgba(0,0,0,0.5); border-radius: 5px;">
						<form class="form-inline" action="payment.php" method="POST">

							<div class="form-group">
								
								<label for="fname">First name*: </label>
								<input class="form-control" id="fname" type="text" required name="first_name"  placeholder="your firstname here...">
									
							</div>


							<div class="form-group">
								<label for="visa">Visa NO*: </label>
								<input class="form-control" type="text" required name="visa" id="visa" placeholder="Visa No.">
							</div>

							<div class="form-group">
								<label for="country">Country: </label>
								<select class="form-control" id="title" name="country">
									<option value="Nigeria">Nigeria</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>										
								</select>
							</div>

							<div class="form-group">
								<label for="address1">Address one*: </label>
								<input class="form-control" type="text" required name="address1"  id="address" placeholder="enter you address">
							</div>

							<div class="form-group">
							<label for="address2">Address Two*:</label>
							 
							  <input type="text" class="form-control" name="address2" placeholder="Enter address2" value=""></input>
							
							</div>

							<div class="form-group">
								<label for="email">Email*: </label>
								<input class="form-control" type="email" required name="email" id="email" placeholder="earoapp@gmail.com">
							</div>


							<div class="form-group">
								<label for="pin">PIN:</label>
								<input type="text" required name="pin" class="form-control" placeholder="Enter a PIN...">
							</div>
							<div class="form-group">
								<label for="pin">Passport No.:</label>
								<input type="text" required name="passport" class="form-control" placeholder="your passport number">
							</div>
							<div class="form-group">
								<label for="contact">Contact*: </label>
								<input class="form-control" type="number" required id="contact" name="contact"  placeholder="phone number">
							</div>

							<button type="submit" name="continue" class="btn btn-default btn-block">Submit</button>
						</form>
					</div>
				</div>
			</div>
			</div>
			
		</div>
	</body>
</html>			
			

