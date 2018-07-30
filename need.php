<?php

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

		
	</body>

</html>		

