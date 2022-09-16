<?php 

	$numeroPosiblePrimo = 4;

	function esPrimo($numeroPosiblePrimo) {

        $esPrimo = true;
		
    	$i = 2;

       while ($esPrimo && $i < $numeroPosiblePrimo) {

       	 if ($numeroPosiblePrimo % $i == 0)

       	 	$esPrimo = false;

       	 else

       	 	$i++;

       }



       return $esPrimo;

	}

	


 ?>