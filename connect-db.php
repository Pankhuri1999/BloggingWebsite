<?php

// server info
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'records';

// connect to the database
$mysqli = new mysqli($server, $user, $password, $db);

// show errors (remove this line if on a live site)
mysqli_report(MYSQLI_REPORT_ERROR);

?>