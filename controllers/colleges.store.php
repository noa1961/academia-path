<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$queryBuilder->create('college',[
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'acceptance_rate' => $_POST['acceptanceRate'],
    'graduation_rate' => $_POST['graduationRate'],
    'ranking' => $_POST['ranking'],
    'cost' => $_POST['tuitionCost'],
    'logo' => $_POST['collegeLogo'],
    'college_img' => $_POST['collegeImage'],
    'type_id' => $_POST['type_id'],
    'location_id' => $_POST['location_id']
]);

redirect('colleges');
