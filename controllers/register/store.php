<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$user = $queryBuilder->findBy('user', 'name', $_POST['username'], 'App\Model\User');
if ($user == true) {
    redirect('register');
    exit();
}

else {
    $queryBuilder->create('user',[
        'name' => htmlspecialchars($_POST['username']),
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'role' => 'user'
    ]);

    redirect('login');
}