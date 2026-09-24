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


$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Fruit Market</title>
</head>

<body>

    <h1>Fruit Market</h1>

    <a href="/fruit_market/public/productos">Productos</a>
    <a href="/fruit_market/public/marcas">Marcas</a>
    <a href="/fruit_market/public/ciudades">Ciudades</a>
    <a href="/fruit_market/public/departamentos">Departamentos</a>
    <a href="/fruit_market/public/tipos-documento">Tipos de documento</a>
    <a href="/fruit_market/public/tipos-pago">Tipos de pago</a>
    <a href="/fruit_market/public/tipos-producto">Tipos de producto</a>
    
    <?php

    if ($method == 'GET' && $uri == '/fruit_market/public/productos') {

        $productoController->index();

    }


    if ($method == 'GET' && $uri == '/fruit_market/public/marcas') {

        $marcaController->index();

    }


    if ($method == 'GET' && $uri == '/fruit_market/public/ciudades') {

        $ciudadController->index();

    }


    if ($method == 'GET' && $uri == '/fruit_market/public/departamentos') {

        $departamentoController->index();

    }


    if ($method == 'GET' && $uri == '/fruit_market/public/tipos-documento') {

        $tipoDocController->index();

    }


    if ($method == 'GET' && $uri == '/fruit_market/public/tipos-pago') {

        $tipoPagoController->index();

    }


    if ($method == 'GET' && $uri == '/fruit_market/public/tipos-producto') {

        $tipoProductoController->index();

    }

    ?>

</body>

</html>