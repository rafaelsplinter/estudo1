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
        $resultado = $valorInicial %= $valorBase;

        if ($resultado == 0){
            echo "$valorInicial é múltiplo de $valorBase\n";
        }
        $valorInicial++;
    }

?>