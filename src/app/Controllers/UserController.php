<?php

namespace David\Proyecto1\Controllers;

use David\Proyecto1\Class\User;
use David\Proyecto1\Interfaces\ControllerInterface;
use David\Proyecto1\Models\UserModel;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;
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

    }

    public function store()
    {
        //Recibir los datos que me llegan por el metodo POST
        var_dump($_POST);

        //Validar los datos que me han llegado
        try{
            v::key('name', v::stringType())->
            key('address', v::stringType(), false)->
            key('phone', v::stringType()->length(9,9, false))->
            key('birtdate', v::date('d/m/Y'), false)->
            key('password',v::stringType()->length(2,25))->
            key('email',v::email())->assert($_POST);
        }catch (NestedValidationException $e){
            $errores = $e->getMessages();
            foreach ($errores as $error){
                echo $error;
            }
        }
        $usuario = User::createFromArray($_POST);
        var_dump($usuario);
    }


    public function destroy(int $id)
    {

    }
    public function edit(int $id)
    {
        // TODO: Implement edit() method.
    }
}