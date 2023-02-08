<?php
/*
1. Definindo funções
2. Valor de retorno
3. Argumentos
4. Passagem por referência x valor
5. Argumentos com valores default
6. Escopo de variável
*/

ini_set('display_errors', 1);

echo simprinha("laranja");
echo "<br><br>";

$p1 = "pera";
echo simprinhaComArgumentos($p1);
echo "<br><br>";

$a = 10;
simprinhaPorValor($a);
echo $a;
echo "<br>";

$a = 10;
simprinhaPorReferencia($a);
echo $a;
echo "<br><br>";

echo simprinhaArgDefault();
echo "<br><br>";

echo simprinhaMultParametros(1, 2, 3);
echo "<br><br>";

$a = 10;
echo simprinhaEscopoVar();
echo "<br><br>";

echo "-----<br><br>";

//fatorial => 5! = 1 x 2 x 3 x 4 x 5.
echo fatorial(5);
echo "<br><br>";
echo fatorial(0);
echo "<br><br>";
echo fatorial(1);
echo "<br><br>";
echo fatorial(-1);
echo "<br><br>";

function simprinha()
{
    $string = "laranja";
    return $string;
}

function simprinhaComArgumentos($p1)
{
    return $p1;
}

function simprinhaPorValor($p1)
{
    $p1 += 20; // Mesma coisa de $p1 = $p1 + 20
    return $p1;
}

function simprinhaPorReferencia(&$p1)
{
    $p1 += 20; // Mesma coisa de $p1 = $p1 + 20
    return $p1;
}

function simprinhaArgDefault($p1 = 10)
{
    return $p1;
}

function simprinhaMultParametros($p1, $p2, $p3)
{
    return ($p1 + $p2 + $p3);
}

function simprinhaEscopoVar()
{
    global $a;  //Escopo global da variavel $a.
    echo $a;
}

function fatorial($num)
{
    if ($num < 0) {
        return "Não existe fatorial de número negativo";
    }
    if ($num == 0 || $num == 1) {
        return 1;
    }
    return $num * fatorial($num - 1); // Função recursiva, ou seja, chama ela mesma, até ser resolvida.
}
