
<html>
<?php include 'head.php'?>
	<body>
		<?php include 'nav.php'?>

		<h2 align="center" style="margin-top: 10%; font-size: 2em ">Search Ticket</h2>
		<hr>
		<br>
		<form action="viewTicket.php" method="post">
			
				<div  class="form-group col-sm-4 col-offset-4">
					<label for="visa" align="center" class="form-label">Visa Number</label>
					<input type="text" class="form-control" name="visa" required placeholder="Enter the given Visa Number...">

				</div>
						<div align="center" class="col-sm-4 col-offset-4">
							<input type="submit" name="search" class="btn btn-info btn-block btn-lg" class="form-control" value="Proceed">		
						</div>							


		
		</form>
	</body>
</html>


