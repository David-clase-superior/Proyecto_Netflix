<?php

namespace David\Proyecto1\Models;
use David\Proyecto1\Class\Usuarios;
use PDO;
class UsuarioModel{
    private PDO $conexion;

    /**
     * @param PDO $conexion
     */
    public function __construct(PDO $conexion)
    {
        $this->conexion = $conexion;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM usuarios";

        $consulta = $this->conexion->query($sql);

        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function getById(int $id)
    {
        $sql = "SELECT * FROM usuarios WHERE id= :id";

        $consulta = $this->conexion->prepare($sql);

        $consulta->execute([
            ':id' => $id
        ]);

        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    public function create(Usuarios $usuario)
    {
        $sql = "INSERT INTO usuarios (nombre, email, password, fecha_nacimiento, edad)
                VALUES(:nombre, :email, :password, :fecha_nacimiento, :edad)";

        $consulta = $this->conexion->prepare($sql);

        //$consulta->bindValue(':nombre', $usuario->getNombre());

        $consulta->execute([
            ':nombre' => $usuario->getNombre(),
            ':email' => $usuario->getEmail(),
            ':password'=> $usuario->getPassword(),
            ':fecha_nacimiento' => $usuario->getFechaNacimiento(),
            ':edad'=>$usuario->getEdad()
        ]);

        return $consulta->rowCount() > 0;

    }

    public function update(Usuarios $usuario)
    {
        $sql = "UPDATE usuarios
                Set nombre = :nombre,
                    email = :email,
                    password = :password,
                    fecha_nacimiento = :fecha_nacimiento,
                    edad = :edad,
                WHERE id = :id";
        $consulta = $this->conexion->prepare($sql);

        $consulta->execute([
            ':nombre' => $usuario->getNombre(),
            ':email' => $usuario->getEmail(),
            ':password'=> $usuario->getPassword(),
            ':fecha_nacimiento' => $usuario->getFechaNacimiento(),
            ':edad'=>$usuario->getEdad()
        ]);

        return $consulta->rowCount() > 0;
    }
//Content
    public function delete(int $id)
    {
        $sql = "DELETE * FROM usuarios WHERE id = :id";

        $consulta = $this->conexion->prepare($sql);

        $consulta->execute([
            ':id' => $id
        ]);

        return $consulta->rowCount() > 0;
    }
}