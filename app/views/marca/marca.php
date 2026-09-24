<h2>Marcas</h2>

<?php if (!empty($marcas)): ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
    </tr>

    <?php foreach ($marcas as $marca): ?>
        <tr>
            <td><?= $marca['idMarca'] ?></td>
            <td><?= $marca['nombreMarca'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php else: ?>

<p>No se encontraron marcas.</p>

<?php endif; ?>