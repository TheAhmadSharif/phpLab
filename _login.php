<?php
$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "TicketSystem";
}
else {
	$servername = "localhost";
    $username = "root";
    $password = "hello1234.;";
    $dbname = "Portfolio";
}
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli === false)
{	
		 die("ERROR: Could not connect. " . $mysqli->connect_error);
}?>
