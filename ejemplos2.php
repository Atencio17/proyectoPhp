<?php
function esPrimoRelativo($numero1,$numero2){
    $esPrimoRelativo=true;
    if ($numero1 % $numero2 == 0 || $numero2 % $numero1 == 0) {
        $esPrimoRelativo=false;
    }
    for ($i=2; $i < $numero1 && $esPrimoRelativo; $i++) { 
        if ($numero1 % $i == 0 && $numero2 % $i == 0) {
            $esPrimoRelativo=false;
        }
    }
    return $esPrimoRelativo;
}

$numero1 = 5;
$numero2 = 7;

var_dump(esPrimoRelativo($numero1,$numero2));