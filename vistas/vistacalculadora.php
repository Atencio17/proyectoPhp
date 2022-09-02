<?php
include "..\controladores\controladorcalculadora.php";

$controladorcalculadora = new ControladorCalculadora();
$operadorUno = $_POST['operadorUno'];
$operadorDos = $_POST['operadorDos'];
$operacion = $_POST['operacion'];
switch ($operacion) {
    case '+':
    echo $controladorcalculadora->sumar($operadorUno,$operadorDos);
        break;
    case '-':
    echo $controladorcalculadora->restar($operadorUno,$operadorDos);
        break;
    case '*':
    echo $controladorcalculadora->multiplicar($operadorUno,$operadorDos);
        break;
    case '/':
    echo $controladorcalculadora->dividir($operadorUno,$operadorDos);
        break;
    default:
    echo "Error";
    break;
}
