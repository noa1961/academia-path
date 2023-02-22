<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

// Check if user has perms
if(!isset($_SESSION['user']) || ($_SESSION['user_role'] != 'admin')) {
    redirect('');
}

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$college = $queryBuilder->findById('college',$id,'App\Model\College');
$college->type = $queryBuilder->findById('type',$college->type_id,'App\Model\Type');

$types = $queryBuilder->getAll('type','App\Model\Type');
$locations = $queryBuilder->getAll('location','App\Model\Location');

require 'views/colleges.edit.view.php';