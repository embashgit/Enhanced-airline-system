<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'airline_db';

$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL";
}

$mysqli = new mysqli($host, $username, $password, $database, 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL";
}

?> 