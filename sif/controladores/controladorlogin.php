<?php

require("../componentes/conectarmysql.php");
require("interfazcontrolador.php");

class ControladorLogin extends conectarMySQL implements interfazcontrolador{
    private $tabla = "usuarios";

    public function consultarRegistro($objeto){
        $sql = "select * from ".$this->tabla." where identificacion = ? ";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("i", $objeto->identificacion);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }
}