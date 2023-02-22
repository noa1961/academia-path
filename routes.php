<?php

// HomePage
$router->get('', function() {
    require 'controllers/home.php';
});

// List Colleges *USER*
$router->get('colleges', function() {
    require 'controllers/collegesUser.index.php';
});

// List Colleges *ADMIN*
$router->get('admin/colleges', function() {
    require 'controllers/colleges.index.php';
});

// Show Colleges with id
$router->get('colleges/(\d+)', function($id) {
    require 'controllers/colleges.show.php';
});

// List Colleges by Location id
$router->get('locations/(\d+)', function($id) {
    require 'controllers/locations.show.php';
});

// Delete Colleges
$router->delete('admin/colleges/(\d+)', function($id) {
    require 'controllers/colleges.delete.php';
});

// Add Colleges
$router->get('admin/colleges/create', function() {
    require 'controllers/colleges.create.php';
});
$router->post('admin/colleges', function() {
    require 'controllers/colleges.store.php';
});

// Edit Colleges
$router->get('admin/colleges/edit/(\d+)', function($id) {
    require 'controllers/colleges.edit.php';
});
$router->patch('admin/colleges/(\d+)', function($id) {
    require 'controllers/colleges.update.php';
});

// Login User
$router->get('login', function() {
    require 'controllers/login/login.php';
});
$router->post('login', function() {
    require 'controllers/login/process.php';
});

// Logout User
$router->get('logout', function() {
    unset($_SESSION['user']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_role']);
    redirect('');
});

// Register User
$router->get('register', function() {
    require 'controllers/register/create.php';
});
$router->post('register', function() {
    require 'controllers/register/store.php';
});