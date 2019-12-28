<?php
$tipo = 1234; //Inteiro positivo da base decimal.
var_dump($tipo);
echo "<br>";
$tipo = -2345; //Inteiro negativo na base decimal.
var_dump($tipo);
echo "<br>";
$tipo = 0234; //Inteiro na base octal-simbolizado pelo 0# equivale a 156 decimal.
var_dump($tipo);
echo "<br>";
$tipo = 0x34; //Inteiro na base hexadecimal (simbolizado # pelo 0x) – equivale a 52 decimal.
var_dump($tipo);
echo "<br>";

/*tipo double ou float*/
$tipo = 1.543;
var_dump($tipo);
echo "<br>";
$tipo = 23e4;//  (equivale a 230.000)
var_dump($tipo);
echo "<br>";


/*
O tipo de dados STRING é uma cadeia de caracteres alfanuméricos (letras, números e caracteres especiais). O tipo STRING pode ser utilizado de duas maneiras:

    Utilizando aspas simples o valor da variável será exatamente o texto contido entra as aspas, com exceção de: \\ e \’.
    Utilizando aspas duplas qualquer variável ou caractere de escape será expandido antes de ser atribuído.

    O valor de uma string pode ser convertido para um tipo numérico (int ou float) em uma operação matemática se ele for um número válido. Vejamos um exemplo:

*/

$testando = "Olá Mundo Novo";
$testando1 = '--- $testando ---';
echo $testando1;
echo "<br>";
echo $testando;
echo "<br>";

$numero = 15; //tipo inteiro
$string = "15"; //tipo string
 
echo $numero + $string; //Resultado igual a 30
echo "<br>";

/* Formas de usar array */

$vetor [1] = "Alemanha ";
$vetor [2] = "Italia ";
$vetor [3] = "França";
var_dump($vetor);
echo "<br>";
$vetor ["testando"] = 1;   
var_dump($vetor);
echo "<br>";
?>