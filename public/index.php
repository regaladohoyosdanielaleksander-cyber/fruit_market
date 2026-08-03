<?php

require_once("../clases/Producto.php");

// Instanciar objeto con datos correctos
$producto1 = new Producto("Mango", 5000, 100, "Frutas");

echo "Informacion del producto:" . "<br>";
echo "Nombre: " . $producto1->getNombre() . "<br>";
echo "Precio: " . $producto1->getPrecio() . "<br>";
echo "Cantidad: " . $producto1->getCantidad() . "<br>";
echo "Categoria: " . $producto1->getCategoria() . "<br>";

echo "<br>";
echo "Probando validaciones:" . "<br>";

// Validacion 1: nombre vacio
$producto1->setNombre("");

// Validacion 2: precio negativo
$producto1->setPrecio(-1000);

// Validacion 3: cantidad negativa
$producto1->setCantidad(-5);

?>