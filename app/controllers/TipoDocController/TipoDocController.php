<?php

require_once __DIR__ . '/../../models/TipoModel/tipodocmodel.php';

class TipoDocController
{
    private $tipoDocModel;

    public function __construct()
    {
        $this->tipoDocModel = new TipoDocModel();
    }

    public function index()
    {
        try {
            $tiposDoc = $this->tipoDocModel->getAll();

            require_once __DIR__ . '/../../views/tipodoc/tipodoc.php';

        } catch (Exception $e) {
            echo "Error al cargar los tipos de documento: " . $e->getMessage();
        }
    }
}