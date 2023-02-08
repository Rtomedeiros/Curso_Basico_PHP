<?php

$a = "Renaton Medeiron";

if ($a == "Renaton Medeiron") {
    echo "É Renaton kekeke<br><br>";
}
//OU
if ($a == "Renaton Medeiron") :
    echo "É Renaton kekeke<br><br>";
endif;

if ($a == "Chimbinha") {
    echo "Oi Chimbinha!<br><br>";
} else {
    echo "Não é Chimbinha! Vai pra lá, Vai pra lá kekeke<br><br>";
}

if ($a = "Renaton Medeiron") {
    echo "Oi Renaton<br><br>";
} else if ($a = "Chimbinha") {
    echo "Oi Chimbinha<br><br>";
}

switch ($a) {
    case "Renaton Medeiron":
        echo "Renaton no switch";
        break;
    case "Chimbinha":
        echo "Chimbinha no switch";
        break;
    default:
        echo "Dead End! Flww";
        break;
}
