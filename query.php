<?php
require('../connect_db.php');

//$q = 'SHOW TABLES' ;

//$r = mysqli_query($dbc, $q);


/*if($r)
{echo '<h1>You did it, you motherfucker!</h1>';}
	else
		{echo '<p>You fucked up!</p>';}

while($row=mysqli_fetch_array($r,MYSQLI_NUM)){
	echo('<br>'.$row[0]);
}
mysqli_free_result($r);*/



//echo '<div class="results_box">';
$q = 'SELECT * FROM projects';

$r = mysqli_query($dbc, $q);
	

while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
{
	echo '<div class="results_box">' . 
	'<img src=' .$row['samplephoto'] . '>' . 
	'<ul>' . '<li>' . 'Project Title: ' . $row['title'] .  '</li>' 
	. '<li>' . 'Budget: $' . $row['budget'] . '</li>' 
	. '<li>' . 'Timeframe: ' . $row['timeframe'] .  '</li>' 
	. '<li>' . 'Project Square Footage: ' . $row['sqft'] . '</li>'
	. '<div class="view_project"><a href="projectdetails.php?id=' . $row['id'] . '">View project</div></a>' . '</div>';


}
mysqli_close($dbc);
echo '</ul></div>';