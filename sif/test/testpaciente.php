<?php

require("../modelos/paciente.php");
require("../controladores/controladorpaciente.php");

$cliente = new Paciente(2,"Gerard","1234","Calle falsa 123","weqfwqefwqfwqfwqef");

$cotroladorCliente = new ControladorPaciente();
$cotroladorCliente -> eliminar($cliente);
echo "Elimino exitosamente1 !!!";

?>