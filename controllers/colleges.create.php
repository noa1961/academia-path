<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$types = $queryBuilder->getAll('type','App\Model\Type');

require 'views/colleges.create.view.php';