Ordenar en forma creciente tres valores diferentes A, B Y C.

<?php

$A= rand(1, 100);

$B= rand(1, 100);

$C= rand(1, 100);

echo ("A: $A , B: $B , C: $C") ; // A es el menor
echo PHP_EOL;
if (($A <$B) && ($A <$C)) {
    if ($B < $C) {
        echo ("A: $A , B: $B , C: $C");
} else  /* if ($c<$B) */ {
    echo ("A: $A , C: $C , B: $B");
}

} elseif   (($B < $A) && ($B <$C)){ //B es el Menor

    if ($A < $C) {
        echo ("B: $B , A: $A , C: $C");}

        else {
            echo ("B: $B , C: $C , A: $A");
        }

        }
   
 else { /*/C es el Menor}  */
    if ($A< $C) {
        echo ("C: $C , A: $A , B: $B");}
 else { 
    echo ("C: $C , B: $B , A: $A");}


} 

