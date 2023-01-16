<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$livro = $queryBuilder->deleteById('livro',$id);

redirect('livros');
