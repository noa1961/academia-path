<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$livro = $queryBuilder->findById('livro',$id,'App\Model\Livro');
// fill relationship
$livro->editora = $queryBuilder->findById('editora',$livro->editora_id,'App\Model\Editora');

$editoras = $queryBuilder->getAll('editora','App\Model\Editora');

require 'views/livros.edit.view.php';