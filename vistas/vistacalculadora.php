<?php
include "..\controladores\controladorcalculadora.php";

$controladorcalculadora = new ControladorCalculadora();

echo $controladorcalculadora->sumar(34,56);