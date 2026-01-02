<?php
if (!isset($_SESSION['id'])){
	header('location:login.php');
}
include('header.php'); 
//require('../connect_db.php')
if (!isset($_SESSION)){
	session_start();
}
if ($_SESSION['role'] == 'seller'){
	echo 'Oops! You\'re logged in as a cabinetmaker. That means you can provide quotes, but you can\'t post projects.';
} else{
include('post_form.php');
}


