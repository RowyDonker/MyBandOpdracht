<?php

$servername = "localhost";
$username = "20670_myband";
$password = "Myband";
$dbname = "20670_myband";
    
$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>