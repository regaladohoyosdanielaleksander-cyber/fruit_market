<h2>Departamentos</h2>

<?php if (!empty($departamentos)): ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Departamento</th>
    </tr>

    <?php foreach ($departamentos as $departamento): ?>
        <tr>
            <td><?= $departamento['idDepartamento'] ?></td>
            <td><?= $departamento['nombreDepartamento'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php else: ?>

<p>No se encontraron departamentos.</p>

<?php endif; ?>