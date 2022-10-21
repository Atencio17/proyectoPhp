<?php

require("../componentes/conectarmysql.php");
require("interfazcontrolador.php");

 class ControladorPaciente extends conectarMySQL implements interfazcontrolador{

    private $tabla = "pacientes";

        public function guardar($objeto){

            $sql = "select 1 from ".$this->tabla." where identificacion = ? ";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("i", $objeto->identificacion);
            $sentencia->execute();
            $results = $sentencia -> get_result();

            if($results->num_rows == 0){

                $sql = "insert into ".$this->tabla." values (?,?,?,?,?) ";
                $sentencia = $this->getConexion()->prepare($sql);
                $objeto->identificacion;
                $sentencia->bind_param("issss",$objeto->identificacion,$objeto->nombre,$objeto->telefono,$objeto->direccion,$objeto->diagnostico);
                $sentencia->execute();

            }else{

            $sql = " update ".$this->tabla." set nombre = ?, telefono = ?, direccion = ?, diagnostico = ? where identificacion = ? ";
            $sentencia = $this->getConexion()->prepare($sql);
            $objeto->identificacion;
            $sentencia->bind_param("ssssi", $objeto->nombre,$objeto->telefono,$objeto->direccion,$objeto->diagnostico, $objeto->identificacion);
            $sentencia->execute();
            }
        }

        public function eliminar($objeto){
            $sql = "delete from ".$this->tabla." where  identificacion = ? ";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("i", $objeto->identificacion);
            $sentencia->execute();
        }
        public function listar($objeto){
            $sql = "select * from ".$this->tabla;
            $stmt = $this->getConexion()->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->get_result();
            return $resultado;
        }
        
        public function consultarRegistro($objeto){}

    }

?>