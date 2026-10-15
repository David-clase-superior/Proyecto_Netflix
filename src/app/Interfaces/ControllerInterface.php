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

    //Crea usuario
    public function store();

    //Editar
    public function edit(int $id);


    //Modificar
    public function update(int $id);

    //Borrar

    public function destroy(int $id);


}