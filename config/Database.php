<?php

class Database
{
    private $host = "localhost";
    private $db_name = "fruit_market";
    private $username = "root";
    private $password = "";
    private $connection;

    public function conectar()
    {
        try {
            $this->connection = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );

            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $this->connection;

        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }
}