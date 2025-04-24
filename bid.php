<?php
include('header.php');

$project_id = $_GET['id'];

if (!isset($_SESSION)){
	session_start();
}
if (!isset($_SESSION['id'])){
	header('location:login.php');
	}

if ($_SESSION['role'] == 'buyer'){
	echo 'Oops! You\'re logged in as a regular user. That means you can post projects, but you can\'t provide quotes.';
} else{
	//echo '
include('quote_form.php');
}

