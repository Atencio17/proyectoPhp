<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado Clientes</title>
</head>
<body>
    <h1>Listado Clientes</h1>
    <a href="formulario">Registrar</a>

    <table>

        <tr>

            <th>Codigo</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Acciones</th>

        </tr>

        <?php

            include '../controladores/controladorcliente.php';
            $controladorCliente = new ControladorCliente();
            $resultado = $controladorCliente->listarDatos();
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$fila['codigo']."</td>";
                echo "<td>".$fila['nombres']."</td>";
                echo "<td>".$fila['apellidos']."</td>";
                echo "<td>".$fila['direccion']."</td>";
                echo "</tr>";
            }

        ?>

    </table>

</body>
</html>