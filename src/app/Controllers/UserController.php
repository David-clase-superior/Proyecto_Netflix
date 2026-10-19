<?php

namespace David\Proyecto1\Controllers;

use David\Proyecto1\Interfaces\ControllerInterface;
use David\Proyecto1\Models\UserModel;

class UserController implements ControllerInterface
{

    public function index()
    {
        //Necesito preguntar al modelo y que me de un array con
        //los objetos que representes todos los usuarios que hay en la Base de datos
        //$modelo = new UserModel(); no muy buena practica
        //$usuarios=[];
        $usuarios=UserModel::getUsers();
        var_dump($usuarios);
        include_once "app/Views/backend/admin.users.index.php";
        //Tengo que crear una vista donde se muestre una tabla con todos los usuarios
        //$titulo = "Gestion de usuarios"; para el backend html/php
    }

    public function show(int $id)
    {
        $titulo = "Datos del usuario: $id";
        return "Me estas pidiendo los datos del usuarios $id";
        include_once "app/Views/backend/admin.users.show.php";
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