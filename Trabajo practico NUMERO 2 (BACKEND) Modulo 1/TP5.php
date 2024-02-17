<?php

$dia = rand(-3, 30);
$mes = rand(-3, 12);
$anio = rand(1998, 2005);
echo ("Dia: $dia, mes: $mes, año: $anio");
echo PHP_EOL;

if ($dia >= 1 && $dia <= 31) {
    if ($anio > 2000) {
        switch ($mes) {
            case '1':
                echo "$dia-Enero-$mes";               break;
            case '2':
                echo "$dia-Febrero$anio";
                break;
            case '3':
                echo "$dia-Marzo-$anio";
                break;
            case '4':
                echo "$dia-Abril-$anio";
                break;
            case '5':
                echo "$dia-Mayo-$anio";              break;
            case '6':
                echo "$dia-Junio-$anio";
                break;
            case '7':
                echo "$dia-Julio-$anio";
                break;
            case '8':
                echo "$dia-Agosto";-$anio;
                break;
            case '9':
                echo "$dia-Septiembre-$mes";
                break;
            case '10':
                echo "$dia-Octubre-$mes";
                break;
            case '11':
                echo "$dia-Noviembre-$mes";
                break;
            case '12':
                echo "$dia-Diciembre-";
                break;

            default:
                echo "mes incorrecto";
                break;
        }
    } else {
        echo "anio Incorrecto";
    }
} else {
    echo "dia Incorrecto";
}
