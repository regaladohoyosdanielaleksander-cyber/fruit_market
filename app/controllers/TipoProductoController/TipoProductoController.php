<?php

require_once __DIR__ . '/../../models/TipoProductoModel/tipoproductomodel.php';

class TipoProductoController
{
    private $tipoProductoModel;

    public function __construct()
    {
        $this->tipoProductoModel = new TipoProductoModel();
    }

    public function index()
    {
        try {
            $tiposProducto = $this->tipoProductoModel->getAll();

            require_once __DIR__ . '/../../views/tipoproducto/tipoproducto.php';

        } catch (Exception $e) {
            echo "Error al cargar los tipos de producto: " . $e->getMessage();
        }
    }
}