<?php
require('../connect_db.php');

$current_folder = getcwd();
$final_destination = $current_folder . "/uploads";
$target_name = $final_destination . basename($_FILES['sample_image']['name']);

if (move_uploaded_file($_FILES['sample_image']['tmp_name'], $target_name)){
    echo "File uploaded to:" . $final_destination;
}
