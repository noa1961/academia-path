<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$types = $queryBuilder->getAll('type','App\Model\Type');
$locations = $queryBuilder->getAll('location','App\Model\Location');

require 'views/colleges.create.view.php';