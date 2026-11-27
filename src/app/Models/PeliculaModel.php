<?php

namespace David\Proyecto1\Models;
use David\Proyecto1\Class\Peliculas;
use PDO;
class PeliculaModel
{
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
        $sql = "SELECT * FROM peliculas";

        $consulta = $this->conexion->query($sql);

        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;

    }
    public function getById(int $id)
    {
        $sql = "SELECT * FROM peliculas WHERE :id = id";

        $consulta = $this->conexion->prepare($sql);

        $consulta->execute([
            ':id' => $id
        ]);

        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    }
    public function create(Peliculas $pelicula)
    {
        $sql = "INSERT INTO peliculas (nombre, descripcion)
                VALUES (:nombre, :descripcion)";

        $consulta = $this->conexion->prepare($sql);

        $consulta->execute([
            ':nombre' => $pelicula->getNombre(),
            ':descripcion' => $pelicula->getDescripcion()
        ]);
        return $consulta->rowCount() > 0;
    }
    public function update(Peliculas $pelicula)
    {
        $sql = "UPDATE peliculas SET nombre = :nombre, descripcion = :descripcion WHERE id = :id";

        $consulta = $this->conexion->prepare($sql);

        $consulta->execute([
            ':nombre' => $pelicula->getNombre(),
            ':descripcion' => $pelicula->getDescripcion()
        ]);

        return $consulta->rowCount() > 0;

    }
    public function delete(int $id)
    {
        $sql = "DELETE * FROM peliculas WHERE id = :id";

        $consulta = $this->conexion->prepare($sql);
        $consulta->execute([
           ':id' => $id
        ]);

        return $consulta->rowCount() > 0;

    }

}