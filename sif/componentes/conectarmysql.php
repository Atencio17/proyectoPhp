<?php
    require("../configuraciones/configuraciones.php");
    class conectarMySQL{

        private $conexion;
        
        function __construct(){
            $conexion = mysqli_connect($servidor,$usuario,$contraseña,$basedatos,$puerto);
        }

        public getConexion(){
            return $conexion;
        }
    }
?>