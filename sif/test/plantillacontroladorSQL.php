<?php

require("../componentes/conectarmysql.php");
require("interfazcontrolador.php");

 class Controlador*** extends conectarMySQL implements interfazcontrolador{

    private $tabla = "***";

        public function guardar($objeto){
            $sql = "call *(0,*)";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("*", $objeto->);
            $sentencia->execute();
        }

        public function eliminar($objeto){
            $sql = "call *(1,*)";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("*", $objeto->);
            $sentencia->execute();
        }

        public function listar(){
            
        }

        public function consultarRegistro($objeto){}

    }

?>