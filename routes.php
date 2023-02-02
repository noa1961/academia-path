<?php

// Home page
$router->get('', function() {
    require 'controllers/home.php';
});

// List colleges
$router->get('colleges', function() {
    require 'controllers/colleges.index.php';
});

// Show colleges with id
$router->get('colleges/(\d+)', function($id) {
    require 'controllers/colleges.show.php';
});

// Delete colleges
$router->delete('colleges/(\d+)', function($id) {
    require 'controllers/colleges.delete.php';
});

// Add colleges
$router->get('colleges/create', function() {
    require 'controllers/colleges.create.php';
});
$router->post('colleges', function() {
    require 'controllers/colleges.store.php';
});

// Edit colleges
$router->get('colleges/(\d+)/edit', function($id) {
    require 'controllers/colleges.edit.php';
});
$router->patch('colleges/(\d+)', function($id) {
    require 'controllers/colleges.update.php';
});

// Login user