<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

// Check if user has perms


$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$college = $queryBuilder->deleteById('college',$id);

// Delete images from campus/logos folder
unlink("img/upload/campus/$id.png");
unlink("img/upload/logos/$id.png");

redirect('admin/colleges');
