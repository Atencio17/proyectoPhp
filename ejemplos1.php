<?php
$palabras = array("Patilla","Mango","Manzana");

for ($i=0; $i < count($palabras); $i++) { 
    echo $palabras[$i]."<br>";
}

foreach ($palabras as $palabra) {
    echo $palabra."<br>";
}