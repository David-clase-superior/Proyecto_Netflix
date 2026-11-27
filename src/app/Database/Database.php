<?php

namespace David\Proyecto1\Database;

use PDO;

class Database
{


    const Host = 'mariadb';
    const DB_NAME = 'proyecto';
    const BD_USER = 'root';
    const BD_PASS = 'toor';

    public static function getConnection()
    {
        try {
            $pdo = new PDO("mysql:host=" .self::Host . ";dbname=" . self::DB_NAME,
            self::BD_USER,
            self::BD_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        }catch (\PDOException $e){
            echo "Error, Base de datos no enlazada -> ".$e->getMessage();
            return null;
        }
    }

}