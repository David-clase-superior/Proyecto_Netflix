<?php

namespace David\Proyecto1\Controllers;

use David\Proyecto1\Interfaces\ControllerInterface;

class UserController implements ControllerInterface
{

    public function index()
    {
        return "Página para ver todos los usuarios";
    }

    public function show(int $id)
    {
        return "Me estas pidiendo los datos del usuarios $id";
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function update(int $id)
    {
        return "{
            'massaje' ':''El usuario a editar es '$id
        }";
    }

    public function store()
    {
        return var_dump($_POST);
    }

    public function edit(int $id)
    {
        // TODO: Implement edit() method.
    }

    public function destroy(int $id)
    {
        return "Eliminando al usuario $id";
    }
}