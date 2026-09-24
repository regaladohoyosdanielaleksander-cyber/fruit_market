<?php

require_once __DIR__ . '/../../models/DepartamentoModel/departamentoModel.php';

class DepartamentoController
{
    private $departamentoModel;

    public function __construct()
    {
        $this->departamentoModel = new DepartamentoModel();
    }

    public function index()
    {
        try {
            $departamentos = $this->departamentoModel->getAll();

            require_once __DIR__ . '/../../views/departamento/departamento.php';

        } catch (Exception $e) {
            echo "Error al cargar los departamentos: " . $e->getMessage();
        }
    }
}