<?php
include('conexion.php');

$db = conexion();
$query = "SELECT * FROM persona";
$result = pg_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de personas</title>
</head>
<body>
    <div class="container">
        <h1>Lista de personas</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Celular</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = pg_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['idpersona']; ?></td>
                        <td><?php echo $row['documento']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellido']; ?></td>
                        <td><?php echo $row['direccion']; ?></td>
                        <td><?php echo $row['celular']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>