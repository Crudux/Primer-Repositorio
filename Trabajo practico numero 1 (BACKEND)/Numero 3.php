<?php


$A = rand(-1, +1);
$B = rand(-1, +1);
$C = rand(-1, +1);
$D = rand(-10, +10);
$E = rand(-1, +1);
$F = rand(-1, +1);
$G = rand(-10, +10);

/*var_dump($A);
var_dump($B);
var_dump($C);
var_dump($D);  
*/
echo ("E:" .$E . PHP_EOL);
echo ("F:" .$F. PHP_EOL);


/*var_dump($G); */


$a = $A > 0 && $B < 0;
// var_dump($a);
//var_dump($a);
$b = ($A != $B) && ($B != $C) && ($A != $C);
// var_dump($b);

$e = !($E == 0) && !($F > $G);
//var_dump  ($e);

$d = ($A < $B) && ($B < $C) || ($C < $B) && ($B < $A);
//var_dump($d);
/*----------

($A < $B) && ($B < $C) =
A = 1
B = 2
C = 3 
-----------*/
/* O (||) = ($C < $B) && ($B < $A);
A = 3
B = 2
C = 1 
*/

$e = $F < 0 && ($E< 0)  || !$F<0 && ! ($E<0);
$e2 = $F < 0 xor ($E>= 0)  ;
var_dump($e);
var_dump ($e2);



