<h2>Tipos de Documento</h2>

<?php if (!empty($tiposDoc)): ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
    </tr>

    <?php foreach ($tiposDoc as $tipo): ?>
        <tr>
            <td><?= $tipo['id_tipo_doc'] ?></td>
            <td><?= $tipo['nombre'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php else: ?>

<p>No se encontraron tipos de documento.</p>

<?php endif; ?>