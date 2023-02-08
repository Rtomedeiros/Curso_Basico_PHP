<?php
/*
    AND && - E
    OR || - OU
    XOR - OU exclusivo
    ! - Negação
*/

var_dump(5 > 2 && 5 > 3); //Ambas condições tem que ser verdade.
echo "<br>";

var_dump(5 > 5 || 5 > 3); //Apenas uma das condições precisa ser verdade. Ou ambas.
echo "<br>";

var_dump(5 > 2 xor 5 > 3); //Apenas uma das condições precisa ser verdade. Mas não ambas.
echo "<br>";

var_dump(!(5 > 4)); //Nega a condição;
