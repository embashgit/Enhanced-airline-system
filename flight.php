<?php

	// protect_page();

?>
<html>
	<head>
		<title>Flight Page </title>
		
		<script type="text/javascript">
	        function display() {
				document.getElementById("datepicker1").style.display='block';
				document.getElementById("label1").style.display='block';
	        }
			function hide() {
			document.getElementById("datepicker1").style.display='none';
			document.getElementById("label1").style.display='none';
			}
		</script>

	</head>
	<body>

		<h2>Flight booking <a href="cancelTicket.php">Ticket cancellation</a> </h2>

		<div id="flights">

			<form action="searchedFlight.php" method="post">
				
				<input type="radio" value="1" name="radio" checked="checked" id="radio1" onclick="display()"></input>
				<label for="radio1">Round trip</label>
				
				<input type="radio" value="2" name="radio" id="radio2" onclick="hide()" ></input>
				<label for="radio2">One way</label>

					<select id="cmbMake" name="leaving_from">
							<option value="0" disabled="disabled" selected="selected" id="place">Leaving from...</option>
							<option value="1">Delhi</option>
							<option value="Bangalore">Bangalore</option>
							<option value="3">Kabul</option>
							<option value="4">Kathmandu</option>
							<option value="5">Agra</option>
							<option value="6">Mumbai</option>
							<option value="7">New York</option>
							<option value="8">Paris</option>
					</select>

					<select id="cmbMake" name="going_to" >
							<option value="0" disabled="disabled" selected="selected" id="place">Going to...</option>
							<option value="Delhi">Delhi</option>
							<option value="2">Bangalore</option>
							<option value="3">Kabul</option>
							<option value="4">Kathmandu</option>
							<option value="5">Agra</option>
							<option value="6">Mumbai</option>
							<option value="7">New York</option>
							<option value="8">Paris</option>
					</select>
				
				<p><label style="display:block" id="label0">Depart date:</label>
					<input type="date" name="depart_date"  id="datepicker" placeholder="Pick a date" /></p>
				<p><label style="display:block" id="label1">Return date:</label>
					<input type="date" name="return_date"  id="datepicker1" placeholder="Pick a date" /></p>
				<div>
					<select id="cmbMake" name="adult">
								<option value="0" selected="selected" id="place">Adult</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								
					</select>
					<select id="cmbMake" name="children" >
								<option value="0" disabled="disabled" selected="selected" id="place1">Children</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								
					</select>
				
				</div>
			
				<input type="submit" name="search" id="find" value="Search Flights"/>
			</form>
		</div>

		<div id="banner">
			<img src="banner1.jpg">
		</div>
	</body>
</html>



