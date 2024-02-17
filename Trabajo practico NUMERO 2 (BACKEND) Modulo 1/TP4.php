Escribir un algoritmo que con solo ingresar los datos de un triangulo rectangulo le dice al usuario si es isoceles, escaleno o equilatero.


<?php

$A=  rand(1,3);
$B=  rand(1,3);
$C=  rand(1,3);

echo ("A: $A, B: $B, C: $C");
echo PHP_EOL;
IF ($A == $B && $A == $C) {
    echo "El triangulo es EQUILATERO";
    }
elseif ($A != $B && $A != $C){
  echo "El triangulo es ESCALENO";
}
else {
    echo "El triangulo es ISOSCELES";

}
