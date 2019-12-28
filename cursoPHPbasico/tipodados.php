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
?>