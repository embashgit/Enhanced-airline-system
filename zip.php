if(empty($_POST) === false) {
		$required_fields = array('flight_name', 'leaving_from', 'going_to', 'depart_date', 'depart_time', 'arrival_time','fare');
		foreach($_POST as $key=>$value) {
			if (empty($value) && in_array($key, $required_fields) === true) {
				$errors[] = 'Fields marked with an asterisk are required';
				break 1;
			}
			

		}
	}else {
		if (empty($_POST) === false && empty($errors) === true) {
			$register_data1 = array(
				'flight_name'		=> $_POST['flight_name'],
				'leaving_from'		=> $_POST['leaving_from'],
				'going_to'			=> $_POST['going_to'],
				'depart_date'		=> $_POST['depart_date'],
				'time'				=> $_POST['depart_time'],
				'dest_time'    		=> $_POST['arrival_time'],
				'fare'				=> $_POST['fare']
			);
			register_flight($register_data1);
			header('Location:addFlight.php?success');
			exit();
		}else if (empty($errors) === false) {
			foreach ($errors as $key => $value) {
			 	echo $value."<br>";
			} 
		}
	}