<?php
//
// -----Bucle While----

/*

La idea del bucle while es ejecutar un bloque de codigo hasta que la expresion haya cambiado.



while (expresion logica)
{
    //codigo
}
*/

$edad = readline("Ingrese su edad");

if  ($edad >= 21){

    echo "Usted es mayor de edad, tiene $edad";
} else {

    echo "Usted es menor de edad, tiene: $edad" ;
}