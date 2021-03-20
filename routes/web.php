<?php


use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$router = new RouteCollector();
$router->group(['prefix' => 'Core_PHP_MVC'], function ($router) {

    // For web

    //url: localhost/Core_PHP_MVC/
    $router->get('/', ['App\Controllers\HomeController', 'index']);

    //url: localhost/Core_PHP_MVC/user/1/        // ? means id is optional
    $router->get('/user/{id}?', ['App\Controllers\HomeController', 'index']);
    
    // For API

    //url: http://localhost/Core_PHP_MVC/api/users
    $router->group(['prefix' => 'api'], function ($router) {
        $router->get('/users', ['App\Controllers\ApiController', 'index']);
    });
});


# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Print out the value returned from the dispatched function
echo $response;
