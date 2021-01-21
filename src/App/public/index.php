<?php
include '../../vendor/autoload.php';
/** @var RouteCollector $collector */

use App\Web\Controller\IndexController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$controller = (new IndexController())->index(12);

/*$dispatcher =  new Dispatcher($collector->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

echo $response;*/
