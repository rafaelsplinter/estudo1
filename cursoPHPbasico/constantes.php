<?php

define('nome','rafael');
define('altura',1.72);
const STATUS = true;

class Empresa {
    const NOME_EMPRESA = 'focusquality';
    const ANO = 2015;
}

var_dump(nome);
echo "<br>";
var_dump(altura);
echo "<br>";
var_dump(STATUS);
echo "<br>";
var_dump(Empresa::NOME_EMPRESA);
echo "<br>";
var_dump(Empresa::ANO);
echo "<br>";

echo __FILE__;
echo "<br>";

unset($vetor);
//$vetor = array(1 => "Alemanha", 2 => "Italia", 3 => "França", "testando" => 1);
$vetorPaises = array("Alemanha", "Italia", "França", "Noruega");
var_dump($vetorPaises[1]);
echo $vetorPaises[1];
echo "<br>";
?>