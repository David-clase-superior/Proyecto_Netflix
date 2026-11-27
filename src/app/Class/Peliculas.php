<?php

namespace David\Proyecto1\Class;

class Peliculas
{
    private int $id;
    private string $nombre;
    private string $descripcion;

    /**
     * @param int $id
     * @param string $nombre
     * @param string $descripcion
     */
    public function __construct(int $id, string $nombre, string $descripcion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }


}