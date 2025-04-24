<?php
function load($page = 'login.php'){
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	$url = rtrim($url,'/\\');
	$url .= '/' . $page;
	header('Location: $url');
	exit();
}

function validate($dbc, $email='', $pword=''){
	$e = mysqli_real_escape_string($dbc, trim($email));
	$p = mysqli_real_escape_string($dbc, trim($pword));

	$q = mysqli_query($dbc,"SELECT * FROM users WHERE email='$e' AND pword=SHA1('$p')");
	$num = mysqli_num_rows($q);
	if (($num) == 1){
		$row = mysqli_fetch_array($q, MYSQLI_ASSOC);
		return array(true, $row);
	}else{
		echo 'Email and password not found.';
	}
}