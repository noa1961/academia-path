<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);


$college = $queryBuilder->findById('college',$id,'App\Model\College');
$college->type = $queryBuilder->findById('type',$college->type_id,'App\Model\Type');

require 'views/colleges.show.view.php';