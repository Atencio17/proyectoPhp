<?php

require("../componentes/conectarmysql.php");
require("interfazcontrolador.php");

 class ControladorCategoria extends conectarMySQL implements interfazcontrolador{

    private $tabla = "categorias";

        public function guardar($objeto){
            $sql = "call gestionarcategorias(0,?,?)";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("is", $objeto->codigo,$objeto->nombre);
            $sentencia->execute();
        }

        public function eliminar($objeto){
            $sql = "call gestionarcategorias(1,?,?)";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("is", $objeto->codigo,$objeto->nombre);
            $sentencia->execute();
        }

        public function listar(){
            
        }

        public function consultarRegistro($objeto){}

    }

?>