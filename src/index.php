<?php
    //echo "Pantalla principal de mi app";
    //var_dump($_SERVER);
    //include "app/Views/frontend/index.html";
    //include "app/Views/backend/admin.index.php";
    include_once "./vendor/autoload.php";

    use Phroute\Phroute\Exception\HttpRouteNotFoundException;
    use Phroute\Phroute\RouteCollector;

    $router = new RouteCollector();

    $router->get('/', function(){
        include_once "app/Views/frontend/frontend.index.php";
    });
    $router->get('/admin', function(){
        include_once "app/Views/index.html";
    });

    $router->get('/series', function(){
        include_once "app/Views/frontend/template/frontend.series.php";
    });

    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    try {
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }catch(HttpRouteNotFoundException $e){
        $response = "Link equivocado";
    }
    // Print out the value returned from the dispatched function
    echo $response;