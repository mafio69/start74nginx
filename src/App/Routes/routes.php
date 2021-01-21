<?php

use Phroute\Phroute\RouteCollector;

$collector = new RouteCollector();

$collector->get('/{id}',['IndexController','index']);
$collector->post('products', function(){
    return 'Create Product';
});
$collector->put('items/{id}', function($id){
    return 'Amend Item ' . $id;
});
