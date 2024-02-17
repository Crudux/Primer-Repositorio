<?php

//----------------------------------------------------------------

// ----- Operadores lógicos ~ &&, ||, and, or, xor !

//----------------------------------------------------------------

// Operador %% (AND u Operador de Conjuncion)

/*

&&  --->Ambos lados son verdaderos
and --->Ambos lados son verdaderos 

________________________________
| and(true, true) =true
| and(true, false) =false
| and(false, true) =false
| and(false, false) =false
________________________________

|| ----> Cualquiera de los 2 lados solo tiene que ser verdadero
or ----> Cualquiera de los 2 lados solo tiene que ser verdadero
________________________________
| or(true, true) =true
| or(true, false) =true
| or(false, true) =true
| or(false, false) =false

_________________________________
Operador o exclusivo

xor ----> Solamente un lado debe ser verdadero

xor (true, true) = false
xor (true, false)= true
xor (false, true) = true
xor (falso, false) = false

_______________________________
----Operador de la negacion ---

! ----> Verdadero si el valor no es verdadero

! (true) = false
! (false) = true
*/

use PgSql\Lob;

$var1 = (6 > 7 ); // false
$var2 = (8==8); // true
$var3 = false;
$var4 = true;

/*1*1 = 1
1*0= 0
0*1= 0
0*0= 0

*/
var_dump($var2 && $var4);
var_dump($var1 && $var4);
var_dump($var2 && $var3);


var_dump($var1 || $var4);
var_dump($var2 or $var4);

var_dump(!$var3);
var_dump(!$var4);




