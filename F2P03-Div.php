<?php
echo "Entrez un premier nombre entier : \n";
$a = readline();
echo "Entrez un deuxième nombre entier : \n";
$b = readline();

echo "Division euclidienne : \n";
$q = intdiv( $a, $b) ;
$r = $a % $b ;

echo "$a = $q*$b + $r \n";
