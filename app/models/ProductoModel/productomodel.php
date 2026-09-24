<?php

require_once __DIR__ . '/../../../config/Database.php';

class ProductoModel
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
            $sql = "SELECT * FROM producto";

            $consulta = $this->connection->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function getById($idProducto)
    {
        try {
            $sql = "SELECT * FROM producto WHERE idProducto = :idProducto";

            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(':idProducto', $idProducto, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return null;
        }
    }
}