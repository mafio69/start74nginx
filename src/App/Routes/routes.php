<?php

use App\Controller\StartController;
use Phroute\Phroute\RouteCollector;

$collector = new RouteCollector();

$collector->get('/{id}',[StartController::class,'index']);
$collector->post('products', function(){
    return 'Create Product';
});
$collector->put('items/{id}', function($id){
    return 'Amend Item ' . $id;
});
