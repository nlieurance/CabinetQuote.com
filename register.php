<?php
include('header.php');

//find out if form has been submitted...
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	//connect to the database...
	require('../connect_db.php');
	//produce an error if password fields don't match...
	if ($_POST['pword'] != $_POST['pword_two']){
		echo 'Passwords do not match!';
	}
	//put user data into variables...
	$username = mysqli_real_escape_string($dbc, trim($_POST['yourname']));
	$website = mysqli_real_escape_string($dbc, trim($_POST['website']));
	$email = mysqli_real_escape_string($dbc, trim($_POST['email']));
	$country = mysqli_real_escape_string($dbc, trim($_POST['country']));
	$state = mysqli_real_escape_string($dbc, trim($_POST['state']));
	$city = mysqli_real_escape_string($dbc, trim($_POST['city']));
	$pword = mysqli_real_escape_string($dbc, trim($_POST['pword']));
	$role = mysqli_real_escape_string($dbc, trim($_POST['role']));
	
	
	//check for existing email...
	$q = mysqli_query($dbc,"SELECT * from users WHERE email='$email'");
	if (mysqli_num_rows($q) != 0){
		//Show a message if email is already registered...
		echo 'This email address is already registered.';
	} else{
		//proceed with registration if email isn't registered...
		$query = mysqli_query($dbc, "INSERT INTO users (name, website, email, country, state, city, pword, role) VALUES ('$username', '$website', '$email', '$country', '$state', '$city', SHA1('$pword'), '$role')");
		//send user to homepage and close database connection upon successful query...
		if ($query){
		header('location:index.php');
		mysqli_close($dbc);}
	}
		
	}
?>

<div class="content"><h1>Register...</h1>
	<p>If you'd like to post your own projects or provide quotes, please use the form below to register. Registration is free until
		September 2016.</p>
		<hr>

<div class="project_form">
	<form action="register.php" method="POST">
	<p>Business Name or Your Name: <input name="yourname" type="text" size="100" required></p>
	<p>Website: (Type the URL of your website.) <input type="url" name="website" size="100"></p>
	<p>Email: <input type="email" name="email" size="100" required></p>
	<p>Country: <select name="country" class="countries" id="countryId" required><option value="">Select Country</option></select></p>
	<p>State: <select name="state" class="states" id="stateId" required><option value="">Select State</option></select></p>
	<p>City: <select name="city" class="cities" id="cityId" required><option value="">Select City</option></select></p>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="location.js"></script>
	<p>How will you use Cabinetquote.com? <select name="role" required><option value="buyer">I want to post a project.</option><option value="seller">I want to find projects.</option></select></p>
	<p>Create a Password: <input type="password" name="pword" required></p>
	<p>Confirm Password: <input type="password" name="pword_two" required></p>
	<input type="submit" value="Submit">
</form>
</div>
</div>