<?php

//connectoin


$host = 'localhost';
$username = 'root';
$password = '';
$database = 'airline_db';

$link = mysqli_connect($host, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>