<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>

    <h1>Lista de Productos</h1>

    <?php if (isset($productos) && !empty($productos)): ?>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Tipo de Producto</th>
                    <th>Marca</th>
                    <th>Descripción</th>
                    <th>Fecha de Vencimiento</th>
                    <th>Stock</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($productos as $producto): ?>

                    <tr>
                        <td><?= $producto['idProducto'] ?></td>
                        <td><?= $producto['nombreProducto'] ?></td>
                        <td><?= $producto['precio'] ?></td>
                        <td><?= $producto['idTipoProducto'] ?></td>
                        <td><?= $producto['idMarca'] ?></td>
                        <td><?= $producto['descripcionProducto'] ?></td>
                        <td><?= $producto['fechaVencimiento'] ?></td>
                        <td><?= $producto['stock'] ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    <?php else: ?>

        <p>No se encontraron productos.</p>

    <?php endif; ?>

</body>
</html>