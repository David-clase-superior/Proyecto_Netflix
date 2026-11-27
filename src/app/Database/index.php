<?php

    require_once "Database.php";

    use David\Proyecto1\Database\Database;

    $conexion = Database::getConnection();

    if ($conexion !== null){
        echo "Base de datos enlazada a la aplicacion";
    }