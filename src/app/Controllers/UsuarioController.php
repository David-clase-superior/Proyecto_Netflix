<?php

namespace David\Proyecto1\Controllers;

use David\Proyecto1\Class\Usuarios;
use David\Proyecto1\Models\UsuarioModel;

class UsuarioController
{
    private UsuarioModel $usuarioModel;

    /**
     * @param UsuarioModel $usuarioModel
     */
    public function __construct(UsuarioModel $usuarioModel)
    {
        $this->usuarioModel = $usuarioModel;
    }

    public function index()
    {
        $usuarios = $this->usuarioModel->getAll();
        require __DIR__ . '/../Views/backend/template/BdUsuarios/template/index.php';
        return $usuarios;
    }

    public function show(int $id)
    {
        $mostrarUsuario = $this->usuarioModel->getById($id);
        return $mostrarUsuario;
    }

    public function create(Usuarios $usuario)
    {
        $usuarioNuevo = $this->usuarioModel->create($usuario);
        return $usuarioNuevo;
    }

    public function edit(Usuarios $usuario)
    {
        $usuarioEditado = $this->usuarioModel->update($usuario);
        return $usuarioEditado;
    }
    public function delete(int $id)
    {
        $usuarioBorrado = $this->usuarioModel->delete($id);
        return $usuarioBorrado;
    }

    public function createForm()
    {
        require __DIR__ . "/../Views/frontend/template/formularios/Formulario_Usuarios/Usuarios.php";
    }

    public function store()
    {
        $nombre = $_POST['nombre'];
        $edad = (int) $_POST['edad'];
        $email = $_POST['email'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'] !== '' ? $_POST['fecha_nacimiento'] : null;
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $usuario = new Usuarios(
            0,
            $nombre,
            $edad,
            $email,
            $password,
            $fecha_nacimiento
        );
        return $this->create($usuario);
    }



}