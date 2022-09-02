<?php
class ControladorCalculadora {

    private $operadorUno;
    private $operadorDos;

    function __construct($operadorUno="",$operadorDos=""){
        $this->$operadorUno=$operadorUno;
        $this->$operadorDos=$operadorDos;
    }

    public function sumar($operadorUno="",$operadorDos=""){
        $operadorUno = empty($operadorUno) ? $this->$operadorUno : $operadorUno;
        $operadorDos = empty($operadorDos) ? $this->$operadorDos : $operadorDos;
        return $operadorUno + $operadorDos;
    }

    public function restar($operadorUno="",$operadorDos=""){
        $operadorUno = empty($operadorUno) ? $this->$operadorUno : $operadorUno;
        $operadorDos = empty($operadorDos) ? $this->$operadorDos : $operadorDos;
        return $operadorUno - $operadorDos;
    }

    public function dividir($operadorUno="",$operadorDos=""){
        $operadorUno = empty($operadorUno) ? $this->$operadorUno : $operadorUno;
        $operadorDos = empty($operadorDos) ? $this->$operadorDos : $operadorDos;
        return $operadorUno / $operadorDos;
    }
    
    public function multiplicar($operadorUno="",$operadorDos=""){
        $operadorUno = empty($operadorUno) ? $this->$operadorUno : $operadorUno;
        $operadorDos = empty($operadorDos) ? $this->$operadorDos : $operadorDos;
        return $operadorUno * $operadorDos;
    }
}