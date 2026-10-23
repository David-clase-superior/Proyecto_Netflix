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
    public static function saveUser(User $user):bool
    {
        $conexion="";
        try{
            $conexion= new PDO("mysql:host=mariadb;dbname=netflix","miguel",
                "leugim");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
        //generar una consulta
        $sql="INSERT INTO users (name, address, phone, birthdate, password, email) 
        Values (:nombre,:direccion,:telefono,STR_TO_DATE(:fechanac,'%Y-%m-%d'),:contrasenya,:correo) ";

        $stmt=$conexion->prepare($sql);
        $stmt->bindValue("nombre", $user->getName());
        $stmt->bindValue("direccion", $user->getAddress());
        $stmt->bindValue("telefono", $user->getPhone());
        $stmt->bindValue("fechanac", $user->getBirthdate()->format('Y-m-d'));
        $stmt->bindValue("contrasenya", $user->getPassword());
        $stmt->bindValue("correo", $user->getEmail());

        $stmt->execute();
        $resultado=$stmt->rowCount();
        if(!$resultado){
            return false;
        }else{
            return true;
        }
    }
    public static function deleteUser(int $idUser):bool
    {
        //vlucas/phpdotenv
        $conexion="";
        try{
            $dsn= "mysql:host=mariadb;dbname=" . $_ENV['MARIADB_DBNAME'];
                $usuarioBD=$_ENV['MARIADB_USER'];
                $passwordBD=$_ENV['MARIADB_PASSWORD'];
                $conexion = new PDO($dsn,$usuarioBD,$passwordBD);

                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
        $sql="DELETE FROM users WHERE id=?";
        $stmt=$conexion->prepare($sql);
        $stmt->bindValue(1,$idUser);
        $stmt->execute();

        if ($stmt->rowCount()) {
            return true;
        }else{
            return false;
        }
    }
}