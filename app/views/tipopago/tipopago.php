<h2>Tipos de Pago</h2>

<?php if (!empty($tiposPago)): ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Modo de Pago</th>
    </tr>

    <?php foreach ($tiposPago as $tipo): ?>
        <tr>
            <td><?= $tipo['id_Tipo_pago'] ?></td>
            <td><?= $tipo['modo_Pago'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php else: ?>

<p>No se encontraron tipos de pago.</p>

<?php endif; ?>