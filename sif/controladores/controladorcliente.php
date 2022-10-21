<?php

require("../componentes/conectarmysql.php");
require("interfazcontrolador.php");

 class ControladorCliente extends conectarMySQL implements interfazcontrolador{

    private $tabla = "cliente";

        public function guardar($objeto){

            $sql = "select 1 from ".$this->tabla." where codigo = ? ";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("i", $objeto->codigo);
            $sentencia->execute();
            $results = $sentencia -> get_result();

            if($results->num_rows == 0){

                $sql = "insert into ".$this->tabla." values (?,?,?,?) ";
                $sentencia = $this->getConexion()->prepare($sql);
                $objeto->codigo;
                $sentencia->bind_param("isss",$objeto->codigo,$objeto->nombres,$objeto->apellidos,$objeto->direccion);
                $sentencia->execute();

            }else{

            $sql = " update ".$this->tabla." set nombres = ?, apellidos = ?, direccion = ? where codigo = ? ";
            $sentencia = $this->getConexion()->prepare($sql);
            $objeto->codigo;
            $sentencia->bind_param("sssi", $objeto->nombres,$objeto->apellidos,$objeto->direccion, $objeto->codigo);
            $sentencia->execute();
            }
        }

        public function eliminar($objeto){
            $sql = "delete from ".$this->tabla." where  codigo = ? ";
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->bind_param("i", $objeto->codigo);
            $sentencia->execute();
        }

        public function listar(){
            $sql = "select codigo, concat(nombres,' ',apellidos) nombre from ".$this->tabla;
            return $this->getDatos($sql);
        }

        public function listarDatos(){
            $sql = "select * from ".$this->tabla;
            return $this->getDatos($sql);
        }

        public function getDatos($sql){
            $sentencia = $this->getConexion()->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->get_result();
            return $resultado;
        }

        public function consultarRegistro($objeto){}

    }

?>