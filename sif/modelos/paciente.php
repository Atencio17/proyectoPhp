<?php

class Paciente{
    public $identificacion;
    public $nombre;
    public $telefono;
    public $direccion;
    public $diagnostico;

    function __construct($identificacion='',$nombre='',$telefono='',$direccion='',$diagnostico=''){

        $this->identificacion =  $identificacion;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->diagnostico = $diagnostico;
    }


}



?>