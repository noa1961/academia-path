<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$college = $queryBuilder->deleteById('college',$id);

redirect('colleges');
