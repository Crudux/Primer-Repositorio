<?php

// ------ Coalencia NUll  ---  ??

/* 

$a ?? "Valor por defecto"

La idea es que si el primer valor es null, tomara el segundo valor.
Si ese valor es null, tomara el siguiente valor.

*/

// Ejemplo de variable con valor null
$nombre = null;

// Utilizando el operador de fusion null para proporcionar un valor determinado.

$nombreCompleto = $nombre ?? "Usuario";

// El resultado sera "Usuario" por que el $nombre es null
echo $nombreCompleto;

