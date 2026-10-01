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

    $router->get('/obtener-pass', function(){
        include_once "ejemplo/funciones.php";
        echo create_pass();
    });

    $router->get('/series', function(){
        include_once "app/Views/frontend/template/frontend.series.php";
    });


    $router->get('/movie/add', function(){
        include_once "app/Views/backend/admin.movie.new.php";
    });

    $router->post('/movie', function(){
        //Que hacemos con los datos de la pelicula
        var_dump($_POST);
        var_dump($_FILES);
        //$_POST['genero'][0];
    });

    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    try {
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }catch(HttpRouteNotFoundException $e){
        $response = "Link equivocado";
    }
    // Print out the value returned from the dispatched function
    echo $response;