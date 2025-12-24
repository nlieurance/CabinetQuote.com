<?php
$dbc = mysqli_connect(
  getenv('DB_HOST'),
  getenv('DB_USER'),
  getenv('DB_PASS'),
  getenv('DB_NAME')
);

if (!$dbc) {
  die('Database connection failed: ' . mysqli_connect_error());
}
?>
