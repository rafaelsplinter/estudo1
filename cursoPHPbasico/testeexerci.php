<?php
function converter($temperatura){
    $kelvin = $temperatura + 273;
 
    $fahrenheit = 1.8 * $temperatura + 32;
 
    echo "${temperatura}ºc equivale a ${kelvin}K e ${fahrenheit}ºF";
}

$celsius = 35;

converter($celsius);

echo "<br>";

//-----segundo ex

function comparar($digitos, $inicio, $fim){
 
    $digitos = (string)$digitos;
    $tamanhoCodigo = strlen($digitos);

    if ($tamanhoCodigo == 6) {

        if (substr($digitos, 0,3) == $inicio && substr($digitos, 3) == $fim) {

            echo "Senha confirmada";

        }else{
            echo "senha errada";
        }

    }else {
 
        echo "tamanho do código invalido";
    }
}
    
    define('CPF', 12345678965);
    $senha = 123965;
 
    $sequenciaInicial = substr(CPF, 0,3);
    $sequenciaFinal = substr(CPF, 8);
    
    comparar($senha,$sequenciaInicial,$sequenciaFinal);

    echo "<br>";


    //terceiro ex:-----

    define('LIMITE', 50);
    
    $valorInicial = 10;
    $valorBase = 3;

    while ($valorInicial <= LIMITE){
        $resultado = $valorInicial % $valorBase;

        if ($resultado == 0){
            echo "$valorInicial é múltiplo de $valorBase\n";
            echo "<br>";
        }
        $valorInicial++;
    }


        //quarto ex:-----

        function calculaDesconto ($rendimento){
 
            $desconto = 0;
         
            if ($rendimento >= 1903.99 && $rendimento <= 2826.65) {
         
                $desconto = $rendimento *= 0.075;

                echo "1";
                echo "<br>";
                 
            } elseif ($rendimento >= 2826.66 && $rendimento <= 3751.05) {
             
                $desconto = $rendimento *= 0.15;

                echo "2";
                echo "<br>";
         
            } elseif ($rendimento >= 3751.06 && $rendimento <= 4664.68) {
             
                $desconto = $rendimento *= 0.225;

                echo "3";
                echo "<br>";
         
            } elseif ( $rendimento > 4664.68) {
             
                $desconto = $rendimento *= 0.275;

                echo "4";
                echo "<br>";
         
            }
         
            return $desconto;
         
        }
         
        $salario = 3826.99;
         
        echo "O desconto será " . calculaDesconto($salario);

        echo "<br>";


        //quinto ex:-----

        $gostaFront = false;
        $gostaBack = true;

        if ($gostaFront && $gostaBack) {
     
            echo "Sou Fullstack";
         
        } elseif ($gostaBack && !$gostaFront) {
         
            echo "Sou de Back-end";
         
        } elseif ($gostaFront && !$gostaBack) {
             
            echo "Sou de Front-end";
         
        } else {
         
            echo "Não gosta de nada";
         
        }
?>