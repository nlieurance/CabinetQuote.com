<!DOCTYPE html><HTML><HEAD><TITLE>Projects</TITLE><link rel="stylesheet" type="text/css" href="cabinetquote.css"></HEAD>
<BODY>	
<?php
session_start();
?>
<div id="logo"><a href="index.php"><h1>CabinetQuote.com</h1></a></div>

<div id="menu">
	<ul>
	<li><a href="about.php">About</a></li>
	<?php if (!isset($_SESSION['id'])){
	echo '<li><a href="register.php">Register</a></li>' ;}?>
	<li><a href="post.php">Post a Project</a></li>
	<?php if (!isset($_SESSION['id'])){
	echo '<li><a href="login.php">Log in</a></li>' ;}?>
	<?php if (isset($_SESSION['id'])){
	echo '<li><a href="logout.php">Log out</a></li>' ;}?>
	<li>Blog</li>
	</ul>
</div>

<div class="page_intro">
	<h1>Free Quotes. No Hassles.</h1>
	<h2>Need new cabinets or countertops? Post a project and get free quotes. No one will contact you and we won't share your info. <a href="about.php">Learn more.</a></h2>

</div>