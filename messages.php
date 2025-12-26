<?php
require_once __DIR__ . '/connect_db.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// make sure the user is logged in
if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit;
}

include('header.php');
?>

<div class="project_results"><h1>Quote Details...</h1>

<div class="project_results"><h1>Project Messages...</h1>
<p>Only the member who posted this project and the member who provided the quote can see these messages. Feel free to discuss any project details here. Please
scroll down to the bottom of the page to post a new message.</p>

<?php 
$poster_id = $_GET['poster'];
$project_id = $_GET['id'];
$q = mysqli_query($dbc,"SELECT * FROM messages WHERE poster_id='$poster_id' AND project_id='$project_id'");

while ($row = mysqli_fetch_assoc($q)) { 
	if ($row['role'] == 'seller'){
		echo '<div class="seller_message">';
	echo '<ul><li>Message from Cabinetmaker: ' . $row['message']. '</li></ul>';
} elseif ($row['role'] == 'buyer'){
	echo '<div class="message">';
	echo '<ul><li>Message from Poster: ' . $row['message']. '</li></ul>';
}
	echo '</div>';
} 
?>
<div class="project_form">
	<form action="post_message.php" method="POST">
		<p>Type a question or comment about the project below:</p>
		<p><textarea name="message" cols="90" rows="10" required></textarea></p>
		<input type="hidden" value=<?php echo $poster_id ;?> name="message_id"></p>
		<input type="hidden" value=<?php echo $project_id;?> name='project_id'></p>
		<input type="hidden" value=<?php echo $_SESSION['role'] ;?> name="role"></p>
		<p><input type="submit" value="Submit"></p>
	</form>
