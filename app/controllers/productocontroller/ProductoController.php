<?php

require_once __DIR__ . '/../../models/ProductoModel/productomodel.php';

class ProductoController
{
    private $productoModel;

    public function __construct()
    {
        $this->productoModel = new ProductoModel();
    }

    public function index()
    {
        try {
            $productos = $this->productoModel->getAll();

            require_once __DIR__ . '/../../views/producto/producto.php';

        } catch (Exception $e) {
            echo "Error al cargar los productos: " . $e->getMessage();
        }
    }
}
