<?php

namespace David\Proyecto1\Models;

use David\Proyecto1\Class\User;
use PDO;

class UserModel
{

    public static function getUsers():array{


            $conexion =
                new PDO("mysql:host=mariadb;dbname=netflix",
                    "miguel",
                    "leugim");
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
        $sql = "SELECT * FROM users";
        $stmt = $conexion->prepare($sql);

        $stmt->execute();

        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //var_dump($resultado);
        return User::createMultipleUsersFromArray($resultado);

        //echo "El usuario es: ".$resultado[0]['name'];
        //echo "El usuario es: ".$resultado[0][3];
    }
}