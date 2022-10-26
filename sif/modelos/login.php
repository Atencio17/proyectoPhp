<?php

class Login{
    public $identificacion;
    public $contraseña;
    public $fechacreacion;

    function __construct($identificacion,$contraseña,$fechacreacion){

        $this->identificacion =  $identificacion;
        $this->contraseña = $contraseña;
        $this->fechacreacion = $fechacreacion;
    }


}



?>