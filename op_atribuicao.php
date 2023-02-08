<?php
/*
+= Atribuição e Adição          $a += $b    $a = $a + $b
-= Atribuição e Subtração       $a -= $b    $a = $a - $b
*= Atribuição e Multiplicação   $a *= $b    $a = $a * $b
/= Atribuição e Divisão         $a /= $b    $a = $a / $b
%= Atribuição e Módulo (resto)  $a %= $b    $a = $a % $b
.= Atribuição e concatenação    $a .= $b    $a = $a . $b
*/

$a = 10;
$b = 20;
$c = 30;

$soma = $a += $b;
echo $soma . "<br>";
$soma += $c;
echo "$soma <br><br>";

$a = 10;
$b = 20;
$c = 30;

$sub = $a -= $b;
echo "$sub <br>";
$sub -= $c;
echo "$sub <br><br>";

$a = 10;
$b = 20;
$c = 30;

$mult = $a *= $b;
echo "$mult <br>";
$mult *= $c;
echo "$mult <br><br>";

$a = 10;
$b = 20;
$c = 30;

$div = $a /= $b;
echo "$div <br>";
$div /= $c;
echo "$div <br><br>";

$a = 10;
$b = 10;
$c = 10;

$resto = $a %= $b;
echo "$resto <br>";
$resto %= $c;
echo "$resto <br><br>";

$a = "Renato ";
$b = "Mendes ";
$c = "Tilambucos";

$concat = $a .= $b;
echo "$concat <br>";
$concat .= $c;
echo "$concat <br><br>";
