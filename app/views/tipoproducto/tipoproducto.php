<h2>Tipos de Producto</h2>

<?php if (!empty($tiposProducto)): ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Tipo de Producto</th>
    </tr>

    <?php foreach ($tiposProducto as $tipo): ?>
        <tr>
            <td><?= $tipo['idTipoProducto'] ?></td>
            <td><?= $tipo['tipoProducto'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php else: ?>

<p>No se encontraron tipos de producto.</p>

<?php endif; ?>