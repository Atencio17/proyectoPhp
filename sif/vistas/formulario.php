<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Formulario Clientes</title>
</head>
<body>
    <form action='../controladores/controladorformulario.php' method='post'>
        <label for=''>Codigo</label>
        <input type='number' name='codigo' value = '<?php echo isset($_POST['codigo']) ? $_POST['codigo'] : '';?>' ><br>
        <label for=''>Nombres</label>
        <input type='text' name='nombres' value = '<?php echo isset($_POST['nombres']) ? $_POST['nombres'] : '';?>'><br>
        <label for=''>Apellidos</label>
        <input type='text' name='apellidos' value = '<?php echo isset($_POST['apellidos']) ? $_POST['apellidos'] : '';?>'><br>
        <label for=''>Dirección</label>
        <input type='text' name='direccion' value = '<?php echo isset($_POST['direccion']) ? $_POST['direccion'] : '';?>'>
        <button type='submit' name='operacion' value='guardar'>Guardar</button>
        <button type='submit' name='operacion' value='eliminar'>Eliminar</button>

        <input type='text' name='controlador' value='cliente' hidden>
    </form>
</body>
</html>