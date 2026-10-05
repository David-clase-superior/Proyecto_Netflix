<?php

namespace David\Proyecto1\Interfaces;

interface ControllerInterface
{
    //Ver todos los usuarios
    public function index();

    //Ver un solo usuario
    public function show(int $id);

    //Crear un usuario
    public function create();

    //Modificar
    public function update(int $id);

    //Borrar

    public function delete(int $id);
}