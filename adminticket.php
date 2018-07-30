
<html>
<?php include 'head.php'?>
	<body>
		<?php include 'nav.php' ?>
		<h2 align="center" style="margin-top: 10%; font-size: 2em ">Ticket cancellation</h2>
		<hr>
		<br>
		<form action="" method="post">
			
				<div  class="form-group col-sm-4 col-offset-4">
					<label for="visa" align="center" class="form-label">Visa Number</label>
					<input type="text" class="form-control" name="visa" required placeholder="Enter the given Visa Number...">

				</div>
						<div align="center" class="col-sm-4 col-offset-4">
							<input type="submit" name="cancel" class="btn btn-info btn-block btn-lg" class="form-control" value="Proceed">		
						</div>							
					
		<?php

	if (isset($_POST['cancel'])) {
		$query = "SELECT * FROM passengers WHERE visa = '$_POST[visa]'";
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
		if(mysqli_query(mysqli_connect('localhost', 'root', '', 'airline_db'), "DELETE FROM passengers WHERE visa = '$_POST[visa]'")){
			echo "<script>ticket has successfully been canceled</script>";
		}else{
			echo "something went wrong";
		}
	}
?>
				

		
		</form>
	</body>
</html>


