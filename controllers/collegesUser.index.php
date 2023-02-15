<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$colleges = $queryBuilder->getAll('college','App\Model\College');
// fill relationship
foreach ($colleges as $college) {
    $college->type = $queryBuilder->findById('type',$college->type_id,'App\Model\Type');
}

require 'views/collegesUser.index.view.php';