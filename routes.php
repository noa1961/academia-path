<?php

/* home page */
$router->get('', function() {
    require 'controllers/home.php';
});

/* list livros */ // list colleges
$router->get('colleges', function() {
    require 'controllers/colleges.index.php';
});

/* show livro with id */ // show colleges with id
$router->get('colleges/(\d+)', function($id) {
    require 'controllers/colleges.show.php';
});

/* delete livro */ // delete colleges
$router->delete('colleges/(\d+)', function($id) {
    require 'controllers/colleges.delete.php';
});

/* add livro */ // add colleges
$router->get('colleges/create', function() {
    require 'controllers/colleges.create.php';
});
$router->post('colleges', function() {
    require 'controllers/colleges.store.php';
});

/* edit livro */ // edit colleges
$router->get('collcollegesege/(\d+)/edit', function($id) {
    require 'controllers/colleges.edit.php';
});
$router->patch('colleges/(\d+)', function($id) {
    require 'controllers/colleges.update.php';
});
