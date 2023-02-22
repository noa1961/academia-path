<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

if (isset($_SESSION['user'])) {
    redirect('');
}

if (isset($_SESSION['admin'])) {
    redirect('admin/colleges');
}

$user = $queryBuilder->findBy('user', 'name', $_POST['username'], 'App\Model\User');

if ($user == false) {
    redirect('login');
    exit();
} else if (password_verify($_POST['password'], $user->password) == false) {
    redirect('login');
    exit();
} else {
    $_SESSION["user"] = $user->name;
    $_SESSION["user_id"] = $user->id;
    $_SESSION["user_role"] = $user->role;
    if ($user->role == 'admin') {
        redirect('admin/colleges');
    } else {
        redirect('');
    }
}
var_dump($_SESSION);
