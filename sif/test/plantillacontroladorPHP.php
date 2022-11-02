<?php

require("../componentes/conectarmysql.php");
require("interfazcontrolador.php");

 class ControladorPaciente extends conectarMySQL implements interfazcontrolador{

    private $tabla = "***";

        public function guardar($objeto){
            $sql = "select 1 from ".$this->tabla." where * ";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("*", $objeto->);
            $sentencia->execute();
            $results = $sentencia -> get_result();

            if($results->num_rows == 0){

                $sql = "insert into ".$this->tabla." values (*) ";
                $sentencia = $this->getConexion()->prepare($sql);
                $objeto->codigo;
                $sentencia->bind_param("*",$objeto->);
                $sentencia->execute();

            }else{

            $sql = " update ".$this->tabla." set * ";
            $sentencia = $this->getConexion()->prepare($sql);
            $objeto->codigo;
            $sentencia->bind_param("*", $objeto->);
            $sentencia->execute();
            }
        }

        public function eliminar($objeto){
            $sql = "delete from ".$this->tabla." where  * ";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("*", $objeto->);
            $sentencia->execute();
        }

        public function listar(){
            $sql = "select * from ".$this->tabla;
            return $this->getDatos($sql);
        }

        public function listarDatos(){
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->get_result();
            return $resultado;
        }

        public function consultarRegistro($objeto){}

    }

?>