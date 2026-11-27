<?php

require_once "./app/Database/Database.php";
require_once "./app/Models/UsuarioModel.php";

use David\Proyecto1\Database\Database;
use David\Proyecto1\Models\UsuarioModel;

$conexion = Database::getConnection();

$modelo = new UsuarioModel($conexion);

$usuarios = $modelo->getAll();

$usuario = $modelo->getById(2);

var_dump($usuario);