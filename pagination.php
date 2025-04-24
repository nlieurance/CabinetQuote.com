<?php 
//include('../connect_db.php');


//pagination...
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 10; 
if (isset($_POST['city'])){
	$city = $_POST['city'];
	$sql = "SELECT * FROM projects WHERE city='$city' ORDER BY title ASC LIMIT $start_from, 10";
} else {
$sql = "SELECT * FROM projects ORDER BY title ASC LIMIT $start_from, 10";
}
$rs_result = mysqli_query($dbc,$sql); 
?>

<!--Pinterest embed-->
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>

<?php
//loop that displays projects...
while ($row = mysqli_fetch_assoc($rs_result)) { 
	echo '<div class="results_box">' ;
	if ($row['samplephoto'] != NULL){
	echo '<img src=' .$row['samplephoto'] . '>';
	} else {
		echo '<a data-pin-do="embedPin" data-pin-terse="true" href="'.$row['pin_board'].'"></a>';
	}
	echo 
	'<ul>' . '<li class="title"><strong>' . 'Project Title: ' . $row['title'] .  '</strong></li>' 
	. '<li>' . 'Date Posted: ' . $row['postdate'] . '</li>'
	. '<li>' . 'Budget: $' . $row['budget'] . '</li>' 
	. '<li>' . 'Timeframe: ' . $row['timeframe'] .  '</li>' 
	. '<li>' . 'Project Square Footage: ' . $row['sqft'] . '</li>'
	. '<li>' . 'City: ' . $row['city'] . '</li>'
	. '<li>' . 'State: ' . $row['state'] . '</li>'
	. '<div class="view_project"><a href="projectdetails.php?id=' . $row['id'] . '">View project</div></a>' . '</div>';
}; 

?>

<?php

//pagination variables...
if (isset($_POST['city'])) {
	//$city = $_POST['city'];
	$sql = "SELECT COUNT(title) FROM projects WHERE city='$city'";
} else {
$sql = "SELECT COUNT(title) FROM projects"; 
}
$rs_result = mysqli_query($dbc,$sql); 
$row = mysqli_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 10); 


echo '<div class="pagination_links">Pages: ' ;  
for ($i=1; $i<=$total_pages; $i++) 
{ echo "<a href='index.php?page=".$i."'>".$i."</a> "; }

echo '</div>';
?>
