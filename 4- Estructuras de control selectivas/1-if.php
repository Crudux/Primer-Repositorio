<?php

//------------------------------

// -- Declaracion if/else - Si/No

/*

Esto permite la ejecucion condicional

Piensa en ellos como una pregunta Si/No. Si es verdadera ejectua el codigo.
Si no es verdadera ejecuta el codigo en la seccion else (si se proporciona una).


if (condicion) puede ser verdadero o falso
{
    //si la condicion es cierta
}
else  { 
    //si la condicion es falsa

}

*/

$edad = readline("Ingrese su edad");

if  ($edad >= 21){

    echo "Usted es mayor de edad, tiene $edad";
} else {

    echo "Usted es menor de edad, tiene: $edad" ;
}



