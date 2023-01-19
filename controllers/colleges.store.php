<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$queryBuilder->create('college',[
    'name' => $_POST['name'],
    'type_id' => $_POST['type_id'],
    'ranking' => $_POST['ranking'],
    'description' => $_POST['description'],
    'acceptance_rate' => $_POST['acceptanceRate'],
    'graduation_rate' => $_POST['graduationRate'],
    'cost' => $_POST['tuitionCost'],
    'logo' => $_POST['tuitionCost'],
    'college_img' => $_POST['tuitionCost']
]);

redirect('colleges');
