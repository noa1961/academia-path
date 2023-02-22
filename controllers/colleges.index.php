<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

// Check if user has perms
if(!isset($_SESSION['user']) || ($_SESSION['user_role'] != 'admin')) {
    redirect('');
}

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$colleges = $queryBuilder->getAll('college','App\Model\College');
// fill relationship
foreach ($colleges as $college) {
    $college->type = $queryBuilder->findById('type',$college->type_id,'App\Model\Type');
}

require 'views/colleges.index.view.php';