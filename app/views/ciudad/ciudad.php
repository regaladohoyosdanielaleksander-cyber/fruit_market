<h2>Ciudades</h2>

<?php if (!empty($ciudades)): ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Ciudad</th>
    </tr>

    <?php foreach ($ciudades as $ciudad): ?>
        <tr>
            <td><?= $ciudad['id_ciudad'] ?></td>
            <td><?= $ciudad['nombre_ciudad'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php else: ?>

<p>No se encontraron ciudades.</p>

<?php endif; ?>