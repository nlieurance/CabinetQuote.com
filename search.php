<?php
if (isset($_POST['city'])){
	$city = $_POST['city'];
	$sql = "SELECT * FROM projects WHERE city='$city' ORDER BY title"; 
}
