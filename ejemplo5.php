<?php 

	$numeroPosiblePrimo = 4;

	funtion esPrimo($numeroPosiblePrimo) {

       bolean $esPrimo = true;

       int $i = 2;

       while ($esPrimo && $i < $numeroPosiblePrimo) {

       	 if ($numeroPosiblePrimo % $i == 0)

       	 	$esPrimo = false;

       	 else

       	 	$i++;

       }



       return $esPrimo;

	}

	


 ?>