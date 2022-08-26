<?php 

    $arraysNumeros = $_GET['numerosArray'];

    $tamañoLoopUno = count($arraysNumeros) - 1;

    for ($i=0; $i < $tamañoLoopUno ; $i++) { 
       
        for ($j=$i+1; $j < count($arraysNumeros) ; $j++) { 
           
            $numeroUno = $arraysNumeros[$i];
            $numeroDos = $arraysNumeros[$j];

            if (esPrimoRelativo($numeroUno,$numeroDos))
                echo $numeroUno.' y '.$numeroDos.' Son primos relativos <br>';
        }

    }



    function esPrimoRelativo($numeroUno,$numeroDos) {

        $esPrimoRelativo = true;

        if ($numeroUno%$numeroDos == 0 || $numeroDos%$numeroUno == 0 )

            $esPrimoRelativo = false;

        else 

            for ($i=2; $i < $numeroUno && $esPrimoRelativo 
            && $i<= $numeroDos; $i++) { 
            
                if ($numeroUno % $i == 0 && $numeroDos % $i == 0)
                    $esPrimoRelativo = false;
            }

        return $esPrimoRelativo;

    }



?>