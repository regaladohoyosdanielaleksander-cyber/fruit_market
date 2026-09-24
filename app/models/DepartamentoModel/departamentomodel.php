<?php

require_once __DIR__ . '/../../../config/Database.php';

class DepartamentoModel
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
            $sql = "SELECT * FROM departamento ORDER BY idDepartamento";
            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return [];
        }
    }

    public function getById($idDepartamento)
    {
        try {
            $sql = "SELECT * FROM departamento WHERE idDepartamento = :idDepartamento";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(':idDepartamento', $idDepartamento, PDO::PARAM_INT);
            $consulta->execute();

            return $consulta->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return null;
        }
    }
}