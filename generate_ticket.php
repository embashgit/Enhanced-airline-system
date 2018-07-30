<?php 
session_start();
 ?>

<html>
	<?php include 'head.php'?>
	<body>
		<?php include 'nav.php'?>
		<table align="center" border="1" style="margin-top: 20%; width:68%">
		  <tr>
		    <td><h3 align="center">  Your E-Ticket as on <?php echo date("Y/m/d");?> </h3><br></td>
		  </tr>
		  <tr>
		    <td>
				<h5>
					To fly easy please present the E-Ticket with a valid photo identification at the airport and check-in counter.<br>The check-in counters are open 3 hours prior to departure and close strictly 2 hours prior to departure. 
				</h5>
			</td> 
		  </tr>
		</table>

		<?php
		
			echo '<table align="center" border="1" style="width:68%">

			<tr><td id=main>First name</td>
			    <td id=main>Last name</td>
			    <td id=main>Passport</td>
			    <td id=main>Visa</td>
				<td id=main>PIN</td>
				</tr>';

			$i=0;
			while($i<=($_SESSION['sessionvar']*5)){

				if($i %5==0)
					echo '<tr>';
				if($i %5==0)
					echo '</tr>';
				
			
				$i = $i +1;
			}

			echo '</table>';
		?>

		

		<table border="1" align="center" style="width:68%">
		  <tr>
		    <td> Please note: <br></td>
		    
		  </tr>
		  <tr>
		    <td> <h6> All Guests, including children and infants, must present valid identification at check-in. </h6> </td>
		    </tr>
			
		</table>

	</body>
</html>