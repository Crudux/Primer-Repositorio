<?php

// ---Else If - Si no es verdadera, pero si es verdadero la siguiente, ejecuta el codigo.-----
//

/*

Puede tener una comprobacion adicional ampliando la sentencia if para incluir el elseif.----

Tenga en cuentra que se ejecutará la comprobacion condicional que devuelva primero true.---- 

*/

$edad = readline("Ingrese su edad");
$salario = readline("Ingrese su salario");

if ($salario < 70_000) {
    echo "Ustes cobra menos del salario minimo";
} elseif ($salario < 100_000) {
    echo "Usted cobra un poco mas del salario minimo";
} elseif ($salario < 200_00) {
    echo "Usted cobra relativamente bien";
} elseif ($salario < 300_00) {
    echo "Esta cobrando muy por enciama de la media";
}   else /*($salario >=300_000)*/ {
    echo "Con este salario debe pagar impuesto a las ganancias";

}


if ($salario > 70_000) {
    echo "Ustes cobra menos del salario minimo";
} elseif ($salario > 100_000) {
    echo "Usted cobra un poco mas del salario minimo";
} elseif ($salario > 200_00) {
    echo "Usted cobra relativamente bien";
} elseif ($salario >  300_00) {
    echo "Esta cobrando muy por enciama de la media";
}   else /*($salario >=300_000)*/ {
    echo "Con este salario debe pagar impuesto a las ganancias";

} // Todo esto es lo mismo que if de arriba, pero solo que cambia cobrar >(MAYOR) /*



