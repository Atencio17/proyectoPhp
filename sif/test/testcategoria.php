<?php

require("../modelos/categoria.php");
require("../controladores/categoriacontrolador.php");

$categoria = new Categoria(4,'Bikes');
$controladorCategoria = new ControladorCategoria();
$controladorCategoria->eliminar($categoria);