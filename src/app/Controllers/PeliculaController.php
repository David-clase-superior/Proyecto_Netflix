<?php

namespace David\Proyecto1\Controllers;

use David\Proyecto1\Class\Peliculas;
use David\Proyecto1\Models\PeliculaModel;

class PeliculaController
{
    private PeliculaModel $peliculaModel;

    /**
     * @param PeliculaModel $peliculaModel
     */
    public function __construct(PeliculaModel $peliculaModel)
    {
        $this->peliculaModel = $peliculaModel;
    }
    public function index()
    {
        $peliculas = $this->peliculaModel->getAll();
        require __DIR__ . '/../Views/backend/template/BdUsuarios/template/index.php';
        return $peliculas;
    }
    public function create(Peliculas $peliculas)
    {
        $peliculasCreadas = $this->peliculaModel->create($peliculas);
        return $peliculasCreadas;
    }
    public function delete(int $id)
    {
        $peliculaBorrada = $this->peliculaModel->delete($id);
        return $peliculaBorrada;
    }
    public function show(int $id)
    {
        $peliculaMostrar = $this->peliculaModel->getById($id);
        return $peliculaMostrar;
    }
    public function edit(Peliculas $peliculas)
    {
        $peliculaEditar = $this->peliculaModel->update($peliculas);
        return $peliculaEditar;
    }

}