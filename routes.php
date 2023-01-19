<?php

// home page
$router->get('', function() {
    require 'controllers/home.php';
});

// list colleges
$router->get('colleges', function() {
    require 'controllers/colleges.index.php';
});

// show colleges with id
$router->get('colleges/(\d+)', function($id) {
    require 'controllers/colleges.show.php';
});

// delete colleges
$router->delete('colleges/(\d+)', function($id) {
    require 'controllers/colleges.delete.php';
});

// add colleges
$router->get('colleges/create', function() {
    require 'controllers/colleges.create.php';
});
$router->post('colleges', function() {
    require 'controllers/colleges.store.php';
});

// edit colleges
$router->get('colleges/(\d+)/edit', function($id) {
    require 'controllers/colleges.edit.php';
});
$router->patch('colleges/(\d+)', function($id) {
    require 'controllers/colleges.update.php';
});

// login user