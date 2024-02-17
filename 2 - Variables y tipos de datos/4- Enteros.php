<?php

// -- Numeros enteros -- *// //Integer */

$nroEnterosPositivos = 123;
$nroEnterosNegarivos = -123;
$nroEnString = "123";

var_dump($nroEnterosPositivos); //var_dump(nos permite ver el tipo de dato asociado.
var_dump($nroEnterosNegativos);
var_dump($nroEnString);

//rango tipico (aprox)
// -2_147_483_648 a +2147483648 (sistema de 32 bits)
// -9E18 a 9e18  (sistema de 64 bits) */

// Si el entero es demasiado largo el compilador lo cambiara automaticamente a reales.
$nroMuyLargo = 23122132132132132132132132132132123121121;
var_dump($nroMuyLargo);

