<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "StudentList";
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
}

  



$query = "SELECT * FROM Student";
$result = $mysqli->query($query);
if (!$result) die('Couldn\'t fetch records');
$headers = $result->fetch_fields();
foreach($headers as $header) {
    $head[] = $header->name;
}
$fp = fopen('php://output', 'w');

if ($fp && $result) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="export.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');
    fputcsv($fp, array_values($head)); 
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        fputcsv($fp, array_values($row));
    }
    die;
}




?>