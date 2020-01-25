<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 'Off');
	$appointment_date = "24-01-2020";
	
	$ms = strtotime($appointment_date) * 1000;
	echo $ms;
		if($appointment_date == $today || $appointment_date == $tomorrow) {
				echo $appointment_date . "<br>";
		}
		else {
				echo "something went wrong" . "<br>";
			}
			
			
			function isWeekend($appointment_date) {
				return (appointment_date('N', strtotime($appointment_date)) >= 5);
			}
			
			
			
		  
		$day_of_week = date('N', strtotime('Friday'));
		
		
		if(date("w") == 5){
		   echo "Weekend". "<br>";
		} 
		else {
			echo "Not Weekend". "<br>";
			}
		$today = date("d-m-Y");
		for($i=0; $i < 5; $i++) {
				
				$day_interval = "+" . $i ."day";
				$skip_day = "+" . $i + 1 ."day";
				$date = strtotime($day_interval, strtotime($today));
				if(date('l', $date) == 'Friday')
				{	
					$i = $i + 1;
					$date = strtotime($skip_day, strtotime($today));
				}
				
				echo date("l, jS F, Y", $date). "<br>";
				$ms = strtotime($date) * 1000;
				echo $ms. "<br>";
		}
		
		
		
		
		
		
			
?>
