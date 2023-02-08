<?php
/*
Criar um array
Criar um array dinâmicamente
Especificando as chaves de um array
Array numérico
Array associativo
*/

$array = array();
var_dump($array);
print "<br><br>";
//OU
$array2 = [];
var_dump($array2);
print "<br><br>";

$array = array("Canal TI", "Informatica", "Logica");
var_dump($array);
print "<br><br>";
print_r($array);
print "<br><br>";

//Array Dinamics (Dinâmico) :P
$array = array();
$array[] = "tico";
$array[] = "teco";
$array[] = "lico";
print_r($array);
print "<br><br>";
$array[5] = "tililico";
print_r($array);
print "<br><br>";

//Outra forma de adicionar dinamicamente.
array_push($array, "conteúdo");
print_r($array);
print "<br><br>";

$array[2] = "back"; //Trocou o valor na posicao 2.
print_r($array);
print "<br><br>";

//Especificando as chaves no array
$array = array(
    "channel" => 10,
    "tech" => 20
);
print_r($array);
print "<br><br>";

$array = array(
    10 => "channel",
    20 => "tech"
);

//Array numérico = índice é um número
$array = array(20 => "biscoito");
print_r($array);
print "<br><br>";

//Array associativo = índice é uma string
$array = array("biscoito" => 20);
print_r($array);
print "<br><br>";

//Array multidimensional (Array dentro de outro Array, matriz, loucura rapaiz)
$array = array(
    "Renato", "Medeiros",
    array("Renato2", "Medeiros2")
);
print_r($array);
print "<br><br>";
