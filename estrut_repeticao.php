<?php
/*
While
Do while
For
Foreach
*/

$i = 0;
while ($i < 10) {
    echo $i . "<br>";
    $i++;
}
echo "<br>";

$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);  //Roda ao menos uma vez com a estrutura de rep. Do While.
echo "<br>";

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}
echo "<br>";

//Estrutura de repetição relacionada com arrays.
$array = array("laranja", "pera", "uva", "maça", "mexirica");  //Conjunto de frutas.
foreach ($array as $frutas) {
    echo $frutas . "<br>"; //percorre todo o array.
}
echo "<br>";

//Mostrando indices da array.
foreach ($array as $key => $frutas) {
    echo $key . " " . $frutas . "<br>"; //percorre todo o array.
}
echo "<br>";
