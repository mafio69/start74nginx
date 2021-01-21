<?php

use App\Web\Controller\IndexController;
use Phroute\Phroute\RouteCollector;

$collector = new RouteCollector();

$collector->get('/{id}',[IndexController::class,'index']);
$collector->post('products', function(){
    return 'Create Product';
});
$collector->put('items/{id}', function($id){
    return 'Amend Item ' . $id;
});
