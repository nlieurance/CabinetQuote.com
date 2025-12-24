<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');
$port = (int) getenv('DB_PORT'); 

$dbc = mysqli_connect($host, $user, $pass, $db, $port);

if (!$dbc) {
    die('Database connection failed: ' . mysqli_connect_error());
}
