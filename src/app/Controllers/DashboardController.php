<?php

namespace David\Proyecto1\Controllers;
use David\Proyecto1\Models\UsuarioModel;
use David\Proyecto1\Models\PeliculaModel;
class DashboardController
{
    private UsuarioModel $usuarioModel;
    private PeliculaModel $peliculaModel;

    /**
     * @param UsuarioModel $usuarioModel
     */
    public function __construct(UsuarioModel $usuarioModel, PeliculaModel $peliculaModel)
    {
        $this->usuarioModel = $usuarioModel;
        $this->peliculaModel = $peliculaModel;

    }

    public function index()
    {
        $usuarios = $this->usuarioModel->getAll();
        $peliculas = $this->peliculaModel->getAll();

        require __DIR__ . '/../Views/backend/template/BdUsuarios/template/index.php';
    }

}