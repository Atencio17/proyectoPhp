<?php
class ControladorCalculadora {

    public function sumar($operadorUno,$operadorDos){
        
        return $operadorUno + $operadorDos;
    }

    public function restar($operadorUno,$operadorDos){
        
        return $operadorUno - $operadorDos;
    }

    public function dividir($operadorUno,$operadorDos){
        
        return $operadorUno / $operadorDos;
    }
    
    public function multiplicar($operadorUno,$operadorDos){
        
        return $operadorUno * $operadorDos;
    }
}