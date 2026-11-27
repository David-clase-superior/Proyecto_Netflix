<?php

namespace David\Proyecto1\Class;

use Respect\Validation\Rules\Date;

class Usuarios
{

    private int $id;
    private string $nombre;
    private int $edad;
    private string $email;
    private string $password;
    private ?string $fecha_nacimiento;

    /**
     * @param int $id
     * @param string $nombre
     * @param int $edad
     * @param string $email
     * @param int $password
     * @param ?string $fecha_nacimiento
     */
    public function __construct(int $id, string $nombre, int $edad, string $email, string $password, ?string $fecha_nacimiento)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
        $this->password = $password;
        $this->fecha_nacimiento = $fecha_nacimiento;
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

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getFechaNacimiento():?string
    {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento(?string $fecha_nacimiento): void
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }


}