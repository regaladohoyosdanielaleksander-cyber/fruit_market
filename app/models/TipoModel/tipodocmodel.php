<?php

require_once __DIR__ . '/../../../config/Database.php';

class TipoDocModel
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
            $sql = "SELECT * FROM tipodoc ORDER BY id_tipo_doc";
            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return [];
        }
    }
}