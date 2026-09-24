<?php

require_once __DIR__ . '/../../models/MarcaModel/marcaModel.php';

class MarcaController
{
    private $marcaModel;

    public function __construct()
    {
        $this->marcaModel = new MarcaModel();
    }

    public function index()
    {
        try {
            $marcas = $this->marcaModel->getAll();

            require_once __DIR__ . '/../../views/marca/marca.php';

        } catch (Exception $e) {
            echo "Error al cargar las marcas: " . $e->getMessage();
        }
    }
}