<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$queryBuilder->update('college',$id,[
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'acceptance_rate' => $_POST['acceptanceRate'],
    'graduation_rate' => $_POST['graduationRate'],
    'ranking' => $_POST['ranking'],
    'cost' => $_POST['tuitionCost'],
    'type_id' => $_POST['type_id'],
    'location_id' => $_POST['location_id']
]);

// Image submission
$file_extension_logo = pathinfo ($_FILES['collegeLogo']['name'], PATHINFO_EXTENSION);
$file_extension_image = pathinfo ($_FILES['collegeImage']['name'], PATHINFO_EXTENSION);

// Image extension
$file_extension_logo = strtolower($file_extension_logo);
$file_extension_image = strtolower($file_extension_image);

$valid_extension = array("png");

if(isset($_FILES["collegeLogo"]) && in_array($file_extension_logo, $valid_extension)) {

    // Declare Path
    $target_path_logo = "img/upload/logos/$id.png";

    // Move File
    move_uploaded_file($_FILES['collegeLogo']['tmp_name'], $target_path_logo);

}

if(isset($_FILES["collegeImage"]) && in_array($file_extension_image, $valid_extension)) {

    // Declare Path
    $target_path_campus = "img/upload/campus/$id.png";

    // Move File
    move_uploaded_file($_FILES['collegeImage']['tmp_name'], $target_path_campus);

}

redirect('colleges');