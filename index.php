<?php
	include ('database/connection.php');
?>
<?php 
	$query="SELECT DISTINCT leaving_from from members";
	$result=mysqli_query($link, $query);
	$result2=mysqli_query($link, "SELECT DISTINCT going_to from members");
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
		
		<div class="maindiv" style="padding-top: 40px;">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-offset-3">
						<div class="well">
							<h1 class="text-primary text-center">Search For Flight</h1>
							<form action="searchedFlight.php" method="post" class="form-inline">
							
								<div class="form-group">
									<label for="place2" for="going_to" class="form-label"><span style="color: black">Going to:</span</label>
									<select class="form-control"  name="going_to">
											<option  value="0" disabled="disabled" selected="selected" id="place2">Going from..</option>
											<?php 
												while ($row=mysqli_fetch_array($result2)) { 
											?>
											<option value=<?php echo $row['going_to']?>> <?php echo $row['going_to']?></option>
												
											<?php 

												} 

											?>
									</select>
								</div>
						
								<div class="form-group">
								<label for="place" for="leaving_from" class="form-label"><span style="color: black">Leaving from: </span</label>
									<select class="form-control" name="leaving_from">
											<option value="0" disabled="disabled" selected="selected" id="place">Leaving from...</option>
											<?php 
												while ($row=mysqli_fetch_array($result)) { 
											?>
												<option value=<?php echo $row['leaving_from']?>><?php echo $row['leaving_from']?></option>
											<?php 

												} 

											?>
									</select>
								</div>

								<div class="form-group">
									<label for="datepicker1" class="form-label"><span style="color: black">Depart Date:</span</label>
									<input class="form-control" type="date" name="depart_date"  id="datepicker1" placeholder="Pick a date" />
								</div>
								<button type="submit" class="btn btn-info btn-block" name="search">Search Flight</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php  
			var_dump(logged_in());
			include 'footer.php';
		?>
	</body>
</html>