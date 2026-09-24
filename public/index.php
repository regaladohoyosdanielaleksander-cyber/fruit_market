<?php

require_once __DIR__ . '/../app/controllers/ProductoController/ProductoController.php';
require_once __DIR__ . '/../app/controllers/MarcaController/MarcaController.php';
require_once __DIR__ . '/../app/controllers/CiudadController/CiudadController.php';
require_once __DIR__ . '/../app/controllers/DepartamentoController/DepartametoController.php';
require_once __DIR__ . '/../app/controllers/TipoDocController/TipoDocController.php';
require_once __DIR__ . '/../app/controllers/TipoPagoController/TipoPagoController.php';
require_once __DIR__ . '/../app/controllers/TipoProductoController/TipoProductoController.php';

$productoController = new ProductoController();
$marcaController = new MarcaController();
$ciudadController = new CiudadController();
$departamentoController = new DepartamentoController();
$tipoDocController = new TipoDocController();
$tipoPagoController = new TipoPagoController();
$tipoProductoController = new TipoProductoController();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fruit Market</title>
</head>

<body>

    <h1>Fruit Market</h1>

    <?php
    $productoController->index();
    $marcaController->index();
    $ciudadController->index();
    $departamentoController->index();
    $tipoDocController->index();
    $tipoPagoController->index();
    $tipoProductoController->index();
    ?>

</body>
</html>