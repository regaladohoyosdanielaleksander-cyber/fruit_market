<?php

class Producto {
    private $nombre;
    private $precio;
    private $cantidad;
    private $categoria;

    public function __construct($nombre, $precio, $cantidad, $categoria) {
        $this->setNombre($nombre);
        $this->setPrecio($precio);
        $this->setCantidad($cantidad);
        $this->categoria = $categoria;
    }

    public function setNombre($nombre) {
        if (empty($nombre)) {
            echo "Error: El nombre no puede estar vacio" . "<br>";
        } else {
            $this->nombre = $nombre;
        }
    }

    public function setPrecio($precio) {
        if ($precio <= 0) {
            echo "Error: El precio debe ser mayor que cero" . "<br>";
        } else {
            $this->precio = $precio;
        }
    }

    public function setCantidad($cantidad) {
        if ($cantidad < 0) {
            echo "Error: La cantidad no puede ser negativa" . "<br>";
        } else {
            $this->cantidad = $cantidad;
        }
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getNombre() { return $this->nombre; }
    public function getPrecio() { return $this->precio; }
    public function getCantidad() { return $this->cantidad; }
    public function getCategoria() { return $this->categoria; }
}

?>