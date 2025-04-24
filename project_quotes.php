<div class="quotes-footer"><h1>Quotes...</h1></div>
<?php

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 10; 
$sql = "SELECT * FROM quotes WHERE id='$project_id' ORDER BY amount LIMIT $start_from, 10";
$rs_result = mysqli_query($dbc,$sql); 
?>

<?php

while ($row = mysqli_fetch_assoc($rs_result)) { 
	echo '<div class="quote_box">';
	echo '<h2 class="center">$' .$row['amount'] . '</h2>';
	echo '<ul>' ;
	echo '<li>' . $row['poster'] ;
	echo '<li>' . $row['details'] . '</li></ul>';
	echo '<div class="view_project"><a href="messages.php?id='.$project_id.'&&poster='.$row['poster'].'">View Quote Details</a></div></div>';
}
?>

<?php

//pagination variables...
$sql = "SELECT COUNT(id) FROM quotes WHERE id='$project_id'"; 
$rs_result = mysqli_query($dbc,$sql); 
$row = mysqli_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 10); 


echo '<div class="pagination_links">Pages: ' ;  
for ($i=1; $i<=$total_pages; $i++) 
{ echo "<a href='projectdetails.php?id=" .$project_id  . "&&page=".$i."'>".$i."</a> "; }
echo '</div>';
?></div>