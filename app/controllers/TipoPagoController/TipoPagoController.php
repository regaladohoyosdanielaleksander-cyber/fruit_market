<?php

require_once __DIR__ . '/../../models/TipoPagoModel/tipopagoModel.php';

class TipoPagoController
{
    private $tipoPagoModel;

    public function __construct()
    {
        $this->tipoPagoModel = new TipoPagoModel();
    }

    public function index()
    {
        try {
            $tiposPago = $this->tipoPagoModel->getAll();

            require_once __DIR__ . '/../../views/tipopago/tipopago.php';

        } catch (Exception $e) {
            echo "Error al cargar los tipos de pago: " . $e->getMessage();
        }
    }
}