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
        //var_dump($usuarios);
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
        $datosAModificar=
            json_decode(file_get_contents("php://input"),true);
        $datosAModificar['id']=$id;

        $validacion=
            User::validateUserUpdate($datosAModificar);

        //Leer un usario de la base de datos
        $usuarioAntiguo = UserModel::getUserById($id);

        if($usuarioAntiguo===false){
            return "No se ha encontrado el usuario a modificar";
        }else{
            $usuarioNuevo = User::updateFromArray($usuarioAntiguo, $datosAModificar);

            if(UserModel::updateUser($usuarioNuevo)){
                return "Usuario modificado correctamente";
            }else{
                return "Error al modificar el usuario -_(-_-)_- ";
            }
        }
    }



    public function store()
    {
        //Recibir los datos que me llegan por el metodo POST
        //var_dump($_POST);
        $validacion=User::validateUserCreation($_POST);

        if ($validacion===true) {

            $usuario = User::createFromArray($_POST);

            //Enviar al modelo la instancia del objeto que debe guardar en la BD
            if (!UserModel::saveUser($usuario)) {

                return "Ha ocurrido un error de almacenamiento";

            } else {
                return "Se ha guardado";
            }
        }else {
            foreach ($validacion as $error){
                echo $error;
            }
        }
    }


    public function destroy(int $id)
    {
    if(UserModel::deleteUser($id)){
        //Si se ha borrado correctamente
        http_response_code(200);
        header('Content-Type: application/json');
        return json_encode([
            "error"=>false,
            "message"=>"Usuario eliminado correctamente",
            "code"=>200
        ]);
    }else{
        //Si ha ocurrido algun fallo
        http_response_code(404);
        header('Content-Type: application/json');
        return json_encode([
            "error"=>true,
            "message"=>"No se ha podido eliminar al usuario correctamente",
            "code"=>404
        ]);
    }
    }
    public function edit(int $id)
    {
        // TODO: Implement edit() method.
    }
}