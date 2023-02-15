<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

if (isset($_SESSION['user'])) {
    redirect('');
}

$user = $queryBuilder->findBy('users', 'username', $_POST['username'], 'App\Model\User');
if ($user == false || $user->password != $_POST['password'] ) {
    redirect('login');
    exit();
}
else {
    $_SESSION["user"] = $user->username;
    $_SESSION["user_id"] = $user->user_id;
    redirect('');
}
