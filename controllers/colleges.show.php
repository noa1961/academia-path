<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$livro = $queryBuilder->findById('livro',$id,'App\Model\Livro');
// fill relationship
$livro->editora = $queryBuilder->findById('editora',$livro->editora_id,'App\Model\Editora');

require 'views/livros.show.view.php';