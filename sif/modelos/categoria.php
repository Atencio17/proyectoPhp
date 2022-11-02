<?php

class Categoria {

    public $codigo;
    public $nombre;

    public function __construct($codigo, $nombre){
        
        $this->codigo = $codigo;
        $this->nombre = $nombre;

    }
}