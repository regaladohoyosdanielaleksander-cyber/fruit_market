<?php

require_once __DIR__ . '/../../../config/Database.php';

class TipoPagoModel
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM tipopago ORDER BY id_Tipo_pago";
            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return [];
        }
    }
}