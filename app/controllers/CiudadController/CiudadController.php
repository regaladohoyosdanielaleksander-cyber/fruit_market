<?php

require_once __DIR__ . '/../../models/CiudadModel/ciudadModel.php';

class CiudadController
{
    private $ciudadModel;

    public function __construct()
    {
        $this->ciudadModel = new CiudadModel();
    }

    public function index()
    {
        try {
            $ciudades = $this->ciudadModel->getAll();

            require_once __DIR__ . '/../../views/ciudad/ciudad.php';

        } catch (Exception $e) {
            echo "Error al cargar las ciudades: " . $e->getMessage();
        }
    }
}