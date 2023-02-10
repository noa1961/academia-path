<?php

// Home page
$router->get('', function() {
    require 'controllers/home.php';
});

// List colleges
$router->get('admin/colleges', function() {
    require 'controllers/colleges.index.php';
});

// Show colleges with id
$router->get('colleges/(\d+)', function($id) {
    require 'controllers/colleges.show.php';
});

// Delete colleges
$router->delete('admin/colleges/(\d+)', function($id) {
    require 'controllers/colleges.delete.php';
});

// Add colleges
$router->get('admin/colleges/create', function() {
    require 'controllers/colleges.create.php';
});
$router->post('admin/colleges', function() {
    require 'controllers/colleges.store.php';
});

// Edit colleges
$router->get('admin/colleges/edit/(\d+)', function($id) {
    require 'controllers/colleges.edit.php';
});
$router->patch('admin/colleges/(\d+)', function($id) {
    require 'controllers/colleges.update.php';
});

// Login user