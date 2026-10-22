<?php
    //echo "Pantalla principal de mi app";
    //var_dump($_SERVER);
    //include "app/Views/frontend/index.html";
    //include "app/Views/backend/admin.index.php";
    include_once "./vendor/autoload.php";

    use Phroute\Phroute\Exception\HttpRouteNotFoundException;
    use Phroute\Phroute\RouteCollector;
    use David\Proyecto1\Controllers\UserController;

    $router = new RouteCollector();
    //Rutas de ejemplo

    //rutas de usuario
    //rutas de api rest

    //Vistas
    $router->get('/register',[UserController::class, 'create']);
    $router->get('/user/{id}/edit',[UserController::class, 'edit']);

    $router->get('/user',[UserController::class, 'index']);
    $router->get('/user/{id}',[UserController::class, 'show']);

    $router->post('/user',[UserController::class, 'store']);

    $router->put('/user/{id}',[UserController::class, 'update']);

    $router->delete('/user/{id}',[UserController::class, 'destroy']);


//Rutas de ejemplo


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
    $router->get('/panel-control', function(){
        include_once "app/Views/backend/admin.index.php";
    });
    $router->get('/catalogo', function(){
        include_once "app/Views/backend/catalogo.index.php";
    });
    $router->get('/formulario', function(){
        include_once "app/Views/backend/code.php";
    });
    $router->post('/movie', function(){
        //Que hacemos con los datos de la pelicula
        var_dump($_POST);
        //var_dump($_FILES);
        //$_POST['genero'][0];
        //manageFiles($_FILES);
    });

    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    try {
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }catch(HttpRouteNotFoundException $e){
        $response = "Link equivocado";
    }
    // Print out the value returned from the dispatched function
    echo $response;