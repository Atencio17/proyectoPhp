<?php

$contenidoArchivo = file_get_contents("../recursos/text.json");
$datosJSON = json_decode($contenidoArchivo,true);

echo $datosJSON['fechanacimiento']."<br>";

