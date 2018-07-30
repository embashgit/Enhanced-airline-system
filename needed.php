if($going_count == 0) {
						$going_output[] = 'There was no search results!';
					}else{
					
						while($row = mysqli_fetch_array($query)) {
							$from1 = $row['leaving_from'];
							$to1 = $row['going_to'];
							$flight_id = $row['flight_id'];
							$depart_date = $row['depart_date'];
							$return_date = $row['return_date'];
							$fare = $row['fare'];
							$time = $row['time'];
							$dest_time = $row['dest_time'];

							$going_output[] = $from1.' To '.$to1.' '."</br>".' '."</br>".' Depart date: '.$depart_date.' '."</br>".' '."</br>".' Depart time: '.$time.' '."</br>".' '."</br>".' Arrival time: '.$dest_time.' '."</br>".' '."</br>".' '."Price: ".' '.$fare.' '."</br>";	
						}	
					}
				}else if($value == "round_trip") {

					$depart_date = date('y-m-d', strtotime($depart_date)); 

					$check_query2 = "SELECT * FROM members WHERE leaving_from='$source_flight' AND going_to='$destination_flight' AND depart_date LIKE '%$depart_date%'";

					$query = mysqli_query($link, $check_query2) or die("couldnot search data");
					
					$going_count = mysqli_num_rows($query);
					//echo $count;
					if($going_count == 0) {
						$going_output[] = 'There was no flights while going!';
					}
					else {
				
						while($row = mysql_fetch_array($query)) {
							$from1 = $row['leaving_from'];
							$to1 = $row['going_to'];
							$flight_id = $row['flight_id'];
							$depart_date = $row['depart_date'];
							$fare = $row['fare'];
							$time = $row['time'];
							$dest_time = $row['dest_time'];
		
							$going_output[] = $from1.' To '.$to1.' '."</br>".' '."</br>".' Depart date: '.$depart_date.' '."</br>".' '."</br>".' Depart time: '.$time.' '."</br>".' '."</br>".' Arival time: '.$dest_time.' '."</br>".' '."</br>".' '."Price: ".' '.$fare.' '."</br>";
							
						}
					}

					$return_date = date('y-m-d', strtotime($return_date));

					$check_query3 = "SELECT * FROM members WHERE leaving_from='$destination_flight' AND  going_to='$source_flight' AND depart_date LIKE '%$return_date%'";

					$query = mysqli_query($link, $check_query3) or die("couldnot search data");

					$coming_count = mysqli_num_rows($query);
					
					if($coming_count == 0) {
						$coming_output[] = 'There was no flights while coming!';
					}
					else {
					
						while($row = mysql_fetch_array($query)) {
							$from1 = $row['leaving_from'];
							$to1 = $row['going_to'];
							$flight_id = $row['flight_id'];
							$return_date = $row['depart_date'];
							$fare = $row['fare'];
							$dest_time = $row['dest_time'];
							
							$output1[] = $from1.' To '.$to1.' '."</br>".' '."</br>".' Depart date: '.$return_date.' '."</br>".''."</br>".' Depart time: '.$time.' '."</br>".' '."</br>".' Arrival time: '.$dest_time.' '."</br>".' '."</br>".' '."Price: ".' '.$fare.' '."</br>";
							
						}

					}
				
				}else{
					echo "no flight selected";
				}
			}
			
		?>

		<form action="book.php" method="post">

			<?php

				//check
					if ($value == "round_trip"){

						echo '<h3>Going flights</h3>';

						$i = 0;

						if ($going_count > 0 ) {
							while ($i < $going_count) {
								$going_output[$i];
								echo '<input type="radio" name="hi" checked="checked" value="' . $going_output[$i] . '" >';
								echo $going_output[$i];
								
								echo '</br>';
									$i = $i+1;
							}
						}else{
							echo "No going flights are available...";
						}

						//returning flights printing
						echo '<h3>Returning flights</h3>';

						$j = 0;

						if ($coming_count > 0 ) {
							while ($j < $coming_count) {
								echo '<input type="radio" name="hii" checked="checked" value="' . $coming_output[$j] . '" >';
								echo $coming_output[$j]; 
								echo '</br>';
								$j = $j+1;
							}
						}else{
							echo "No returning flights are available...";
						}
					}else{
						echo '<h3>Going flights</h3>';
						$i = 0;
						if ($going_count > 0 ) {
							while ($i < $going_count) {
								$frist_output[$i];
								echo '<input type="radio" name="hi" checked="checked" value="' . $going_output[$i] . '" >';
							echo $going_output[$i];
							
							echo '</br>';
								$i = $i+1;
							}
						}
						else{
							echo "No going flights are available...";
						}
					}	

					echo "<br>";

					if ($coming_count > 0 | $going_count > 0) {
						echo '<input type="submit" value="Continue >>"/>';
					}
				?>

			</form>
	</body>

</html>		

