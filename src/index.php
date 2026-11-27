<?php

use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;

use David\Proyecto1\Database\Database;
use David\Proyecto1\Models\UsuarioModel;
use David\Proyecto1\Models\PeliculaModel;
use David\Proyecto1\Controllers\UsuarioController;
use David\Proyecto1\Controllers\PeliculaController;
use David\Proyecto1\Controllers\DashboardController;

// Autoload de Composer
include_once __DIR__ . "/vendor/autoload.php";

// Cargar variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Crear conexión
$conexion = Database::getConnection();

// Crear modelo
$usuarioModel = new UsuarioModel($conexion);
$peliculaModel = new PeliculaModel($conexion);

// Crear controlador
$usuarioController = new UsuarioController($usuarioModel);
$peliculaController = new PeliculaController($peliculaModel);
$dashboardController = new DashboardController($usuarioModel, $peliculaModel);

// Crear router
$router = new RouteCollector();

// Ruta principal
$router->get('/' , fn() => $dashboardController->index());
$router->get('/usuarios/crear' , fn() => $usuarioController->createForm());
$router->get('/usuarios', fn() => $usuarioController->index());
$router->get('/peliculas', fn() => $peliculaController->index());

//Post
$router->post('/usuarios/crear', fn() => $usuarioController->store());
// Crear dispatcher
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try {
    $response = $dispatcher->dispatch(
        $_SERVER['REQUEST_METHOD'],
        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
    );
} catch (HttpRouteNotFoundException $e) {
    $response = "Link equivocado";
}

echo $response;
