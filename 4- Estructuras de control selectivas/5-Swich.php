<?php

// Declaracion de Swich - Segun.

/*

Similar a una serie de if.

switch (expression) {

    case 0:


}




*/


$dia = 6;

/*if ($dia == 1) {
    echo "Lunes";
} elseif ($dia == 2) {
    echo "Martes";
} elseif ($dia == 3) {
    echo "Miercoles";
} elseif ($dia == 4) {
    echo "Jueves";
} elseif ($dia == 5) {
    echo "Viernes";
} elseif ($dia == 6) {
    echo "Sabado";
} elseif ($dia == 7) {
    echo "Domingo";
}
else {
    echo "Dia Incorrecto";

} */


switch ($dia) {
    case '1':
        echo "Lunes";
        break;
    case '2':
        echo "Martes";
        break;
    case '3':
        echo "Miercoles";
        break;
    case '4':
        echo "Jueves";
        break;
    case '5':
        echo "Viernes";
        break;
    case '6':
        echo "Sabado";
        break;
    case '7':
        echo "Domingo";
        break;

    default:
        echo "Dia Incorrecto";
    }
