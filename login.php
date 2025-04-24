<?php
include('header.php');
?>

<div class="project_results"><h1>Log In to Post Projects or Provide Quotes...</h1>

<p>You must be logged in to post projects or quotes. Please enter your email address and password below.</p>

<div class="project_form">
<form action="log_me_in.php" method="POST">
<p>Email Address: <input type="email" size="100" name="email" required></p>
<p>Password: <input type="password" name="pword" size="100" required></p>
<input type="submit" value="Submit"></form>