<?php
require('../connect_db.php');

//assign username and password to variables and clean them up...
$user = mysqli_real_escape_string($dbc,trim($_POST['email']));
$pword = mysqli_real_escape_string($dbc, trim($_POST['pword']));

//get the user's details from the database...
$q = mysqli_query($dbc,"SELECT * FROM users WHERE email='$user' AND pword=SHA1('$pword')");
//if the user exists, start the session and add id/pass to the session array...
$num = mysqli_num_rows($q);
	if (($num) == 1){
		session_start();
	$_SESSION['id'] = $user;
	$_SESSION['pword'] = $pword;
	$row = mysqli_fetch_array($q, MYSQLI_ASSOC);
	$_SESSION['role'] = $row['role'];
	//take user to the login success page...
	header('location:success.php');	
	}else{
		echo 'Email and password not found.';
		echo ' Please ' . '<a href="register.php">Register</a>';
	}