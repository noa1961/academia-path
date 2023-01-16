<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$editoras = $queryBuilder->getAll('editora','App\Model\Editora');

require 'views/livros.create.view.php';