<?php
$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Name";
}
else {
    $servername = "localhost";
    $username = "brainexb_studentdb";
    $password = "yru=k!jd+?2K";
    $dbname = "StudentList";
}


$mysqli = new mysqli($servername, $username, $password, $dbname);


?>