<?php 
require('../connect_db.php');

//$current_folder = getcwd();
$final_destination = "uploads/";
$target_name = $final_destination . basename($_FILES['sample_image']['name']);
//$final_name = str_replace(" ","%20",$target_name);


move_uploaded_file($_FILES['sample_image']['tmp_name'], $target_name);
$final_name = str_replace(" ","%20",$target_name);


//if (move_uploaded_file($_FILES['sample_image']['tmp_name'], $target_name)){
    //$final_name = str_replace(" ","%20",$target_name);
//}

$z = mysqli_query($dbc,"INSERT INTO projects (title, budget, timeframe, sqft, samplephoto, newcabinets, description, newcounters, refacing, newdoors, newdrawers, email, pin_board, city, state, postdate) 
						VALUES ('$_POST[title]','$_POST[budget]','$_POST[timeframe]','$_POST[sqft]','$final_name','$_POST[newcabinets]','$_POST[description]','$_POST[newcounters]','$_POST[refacing]','$_POST[newdoors]','$_POST[newdrawers]','$_POST[email]','$_POST[pin_board]','$_POST[city]','$_POST[state]',now())");

mysqli_close($dbc);

header('location:index.php');

?>

