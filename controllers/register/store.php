<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);


$user = $queryBuilder->findBy('users', 'username', $_POST['username'], 'App\Model\User');
if ($user == true) {
    redirect('register');
    exit();
}
else {

$queryBuilder->create('users',[
    'username' => $_POST['username'],
    'password' => $_POST['password'],
 ]);

 $folderName = $_POST['username'];
 $downloadsFolder = '/home/duarte/public_html/MyApp/UserFiles/';
 $path = $downloadsFolder . $folderName;
 mkdir($path);

 redirect('login');
 }