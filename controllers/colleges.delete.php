<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$college = $queryBuilder->deleteById('college',$id);

unlink("img/upload/campus/$id.png");
unlink("img/upload/logos/$id.png");

redirect('colleges');
