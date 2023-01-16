<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$queryBuilder->update('livro',$id,[
    'nome' => $_POST['nome'],
    'editora_id' => $_POST['editora_id'],
    'pags' => $_POST['pags']
]);

redirect('livros');
