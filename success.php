<?php
include('header.php');
if (!isset($_SESSION)){
	session_start();}
?>

<div class="project_results">
<?php 
if ($_SESSION['role'] == 'seller'){
	echo '<h1>Success! Now that you\'re logged in, please feel free to quote any project.</h1>';
} else{
	echo '<h1>Success! Now that you\'re logged in, please feel free to post a project.</h1>';
}
