<!DOCTYPE html>
<html>
<head>
	<title>Regular Expression</title>

	<style type="text/css">
		table {
			border-collapse: collapse;
			margin: auto;
			margin-bottom: 40px;
		}
		table tr td, th {
			border: 1px solid #666;
			padding: 5px 10px;
			text-align: left;
		}

		.container {
			max-width: 960px;
			width: 100%;
			margin: auto;
			margin-top: 40px;
		}
	</style>
</head>
<body>
	<div class="container">


		<table>
				<tr>
					<th>Test</th>
					<th>Validation Result</th>
				</tr>
			
				<?php 

						$namelist = array('Ahmad Sharif', 'sharif Ahmed', 'A', 'abc', '0171182023a', '0171182023666', '01411820236', '010820236', '01703705139', '0');

						$pattern = '/\bAh/';

						foreach ($namelist as $name) {

							if(preg_match_all($pattern, $name)){
							        echo "<tr><td>".$name."</td>";
							        echo "<td>"."Match"."</td></tr>";
							     

							    }else{
							        echo "<tr><td>".$name."</td>";
							        echo "<td>"."Does Not Match"."</td></tr>";  
							    }
							
						}

					?>

			</tr>
		</table>



		<table>
				<tr>
					<th>Full Name</th>
					<th>Validation Result</th>
				</tr>
			
				<?php 

						$namelist = array('Ahmad Sharif', 'Shafin Ahmed', 'A', 'abc', '0171182023a', '0171182023666', '01411820236', '010820236', '01703705139', '0');

						$pattern = '/^[a-zA-Z]{4,20}/';

						foreach ($namelist as $name) {

							if(preg_match_all($pattern, $name)){
							        echo "<tr><td>".$name."</td>";
							        echo "<td>"."Match"."</td></tr>";
							     

							    }else{
							        echo "<tr><td>".$name."</td>";
							        echo "<td>"."Does Not Match"."</td></tr>";  
							    }
							
						}

					?>

			</tr>
		</table>

		<table>
				<tr>
					<th>Mobile Number</th>
					<th>Validation Result</th>
				</tr>
			
				<?php 

						$mobileNumbers = array('01711820236', '01425252536', '01511235689', '016897436985', '0171182023a', '0171182023666', '01411820236', '010820236', '01703705139', '0');

						$pattern = '/^01[35-9][\0-9]{8}$/';

						foreach ($mobileNumbers as $mobileNumber) {

							if(preg_match_all($pattern, $mobileNumber)){
							        echo "<tr><td>".$mobileNumber."</td>";
							        echo "<td>"."Match"."</td></tr>";
							     

							    }else{
							        echo "<tr><td>".$mobileNumber."</td>";
							        echo "<td>"."Does Not Match"."</td></tr>";  
							    }
							
						}

					?>

			</tr>
		</table>


		<table>
			<tr>
				<th>Transaction ID (Last 4 digit)</th>
				<th>Validation Result</th>
			</tr>

			<?php 

						$transactions = array('X985', '5985', '5896', '5895', '0171182023a', '0171182023666', '01411820236', 'XER4', '01703705139', '0');

						$pattern = '/^[\a-z]{4}$/';

						foreach ($transactions as $transaction) {

							if(preg_match_all($pattern, $transaction)){
							        echo "<tr><td>".$transaction."</td>";
							        echo "<td>"."Match"."</td></tr>";
							     

							    }else{
							        echo "<tr><td>".$transaction."</td>";
							        echo "<td>"."Does Not Match"."</td></tr>";  
							    }
							
						}

					?>

			
		</table>



		<table>
			<tr>
				<th>Transaction ID (Last 4 digit)</th>
				<th>Validation Result</th>
			</tr>

			<?php 

						$transactions = array('X985', '5985', '5896', '5895', '0171182023a', '0171182023666', '01411820236', 'XER4', '01703705139', '0');

						$pattern = '/^[\a-z]{4}$/';

						foreach ($transactions as $transaction) {

							if(preg_match_all($pattern, $transaction)){
							        echo "<tr><td>".$transaction."</td>";
							        echo "<td>"."Match"."</td></tr>";
							     

							    }else{
							        echo "<tr><td>".$transaction."</td>";
							        echo "<td>"."Does Not Match"."</td></tr>";  
							    }
							
						}

					?>
		</table>



		<table>
			<tr>
				<th>Roll No</th>
				<th>Validation Result</th>
			</tr>

			<?php 

						$rolls = array('X985', '5985', '5896', '5895', '0171182023a', '0171182023666', '01411820236', 'XER4', '01703705139', '0', 'abc', '0A');

						$pattern = '/^[\0-9]{1,10}$/';

						foreach ($rolls as $roll) {

							if(preg_match_all($pattern, $roll)){
							        echo "<tr><td>".$roll."</td>";
							        echo "<td>"."Match"."</td></tr>";
							     

							    }else{
							        echo "<tr><td>".$roll."</td>";
							        echo "<td>"."Does Not Match"."</td></tr>";  
							    }
							
						}

					?>
		</table>



		<table>
			<tr>
				<th>Email Address</th>
				<th>Validation Result</th>
			</tr>

			<?php 

						$emails = array('a@b.com', 'theahmadsharif@gmail.com', '5896', '5895');

						$pattern = '/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/';

						foreach ($emails as $email) {

							if(preg_match_all($pattern, $email)){
							        echo "<tr><td>".$email."</td>";
							        echo "<td>"."Match"."</td></tr>";
							     

							    }else{
							        echo "<tr><td>".$email."</td>";
							        echo "<td>"."Does Not Match"."</td></tr>";  
							    }
							
						}

					?>
		</table>
		
	</div>  <!-- End Container -->
</body>
</html>















<?php  

/*
	$subject = '01711820236';
	$pattern = '/^01[3-9][\d]{8}$/';
    if(preg_match_all($pattern, $subject, $matches)){
        echo 'Match';

    }else{
        echo 'not matched';
  
    }


    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		    echo "E-mail is not valid";
		} else {
		    echo "E-mail is valid";
		}


*/
?>



     