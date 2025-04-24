<?php 
include('header.php');
require('../connect_db.php');

$project_id = $_GET['id'];
?>

<script async defer src="//assets.pinterest.com/js/pinit.js"></script>

<div class="project_details"><div class="deets_header"><h1>Project Details...</h1></div>

<?php
$project = "SELECT * FROM projects WHERE id=$project_id";

$d = mysqli_query($dbc,$project);

while($row = mysqli_fetch_array($d, MYSQLI_ASSOC)){
	echo '<div class="results_box_deets">';
	if ($row['samplephoto'] != NULL){
		echo '<img src=' .$row['samplephoto'] . '>';
		} else {
			echo '<a data-pin-do="embedPin" data-pin-terse="true" href="'.$row['pin_board'].'"></a>';
		}
	echo '<ul>' . '<li>' . 'Posted On: ' . $row['postdate'] . '</li>'
	. '<li>' . 'Project Title: ' . $row['title'] .  '</li>' 
	. '<li>' . 'Budget: $' . $row['budget'] . '</li>' 
	. '<li>' . 'Timeframe: ' . $row['timeframe'] . '</li>' 
	. '<li>' . 'Project Square Footage: ' . $row['sqft'] . '</li>'
	. '<li>' . 'City: ' . $row['city'] . '</li>'
	. '<li>' . 'State: ' . $row['state'] . '</li>'
	. '<li>' . 'Type of Work Needed: ' . '</li>';
	if ($row['newcabinets'] == 1){
		echo '<ul><li>' . 'New Cabinets'  . '</li></ul>';
	}
	if ($row['newcounters'] == 1){
		echo '<ul><li>' . 'New Countertops'  . '</li></ul>';
	}
	if ($row['refacing'] == 1){
		echo  '<ul><li>' . 'Refacing'  . '</li></ul>';
	}
	if ($row['newdrawers'] == 1){
		echo '<ul><li>' . 'New Drawers' . '</li></ul>';
	}
	if ($row['description'] != NULL) {
		echo '<li>' . 'Project Description: ' . '</li>' 
	. '<ul><li>' . $row['description'] . '</li></ul>';
	}
	//echo '<p><a data-pin-do="embedBoard" data-pin-board-width="900" data-pin-scale-height="120" data-pin-scale-width="115" href="https://www.pinterest.com/MoxieGals/kitchen-cabinets/"></a></p>';
	echo '<div class="view_project"><a href="bid.php?id=' . $row['id'] . '">Provide a quote</div></a>' . '</div>';
	
}

include('project_quotes.php');
echo '<a class="back" href="javascript:history.back()">Back</a>';