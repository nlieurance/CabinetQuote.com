<?php 
//connect to the database...
require('../connect_db.php');
session_start();

//$project_id = $_POST['project_id'];

$amount = mysqli_real_escape_string($dbc,trim($_POST['amount']));
$amount = trim($amount,'$');

//if (isset($_POST['details'])){
$quote_details = mysqli_real_escape_string($dbc,trim($_POST['details']));
//}

//$project_id = $_GET['id'];

//add quote to the database...
$q = mysqli_query($dbc,"INSERT INTO quotes (id, amount, details, poster) VALUES ('$_POST[project_id]','$amount','$quote_details','$_SESSION[id]')");

//send the user back to the project details page after the form is submitted...
header('location:projectdetails.php?id=' . $_POST['project_id'] . '&&poster=' . $_POST['message_id']');



?>
