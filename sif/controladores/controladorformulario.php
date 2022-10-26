<?php




$controlador = $_POST['controlador'];
$operacion = $_POST['operacion'];

if ($controlador == "cliente") {
    
    require("../modelos/cliente.php");
    require("../controladores/controladorcliente.php");
    $codigo = $_POST['codigo'];
    $nombre = isset($_POST['nombres']) ? $_POST['nombres'] : '';
    $apellido = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
    $address = isset($_POST['direccion']) ? $_POST['direccion'] : '';
    $objeto = new Cliente($codigo,$nombre,$apellido,$address);

    $cotroladorGenerico = new ControladorCliente();
    if ($operacion == "guardar") {

        $cotroladorGenerico -> guardar($objeto);
        echo "Inserto exitosamente !!!"; 
    
    }elseif ($operacion == "eliminar") {
    
        $cotroladorGenerico -> eliminar($objeto);
        echo "Elimino exitosamente !!!"; 
    }
    
}elseif ($controlador == "paciente") {
    require("../modelos/paciente.php");
    require("../controladores/controladorpaciente.php");

    
    $identificacion = $_POST['codigo'];
    $nombre = $_POST['nombres'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $diagnostico = $_POST['diagnostico'];

    $objeto = new Paciente($identificacion,$nombre,$telefono,$direccion,$diagnostico);

    $cotroladorGenerico = new ControladorPaciente();

    if ($operacion == "guardar") {

        $cotroladorGenerico -> guardar($objeto);
        echo "Inserto exitosamente !!!"; 
    
    }elseif ($operacion == "eliminar") {
    
        $cotroladorGenerico -> eliminar($objeto);
        echo "Elimino exitosamente !!!"; 
    
    }elseif ($operacion == "listar") {
        
        $resultado = $cotroladorGenerico -> listar($objeto);

        echo "<table border='1'>
        <tr>
        <th>identificacion</th>
        <th>nombre</th>
        <th>telefono</th>
        <th>direccion</th>
        <th>diagnostico</th>
        </tr>";        

        while ($fila = $resultado->fetch_assoc()){
            echo "<tr>
            <td>".$fila['identificacion']."</td>
            <td>".$fila['nombre']."</td>
            <td>".$fila['telefono']."</td>
            <td>".$fila['direccion']."</td>
            <td>".$fila['diagnostico']."</td>
            </tr>";
            }

        echo "</table>";
    }  
}
