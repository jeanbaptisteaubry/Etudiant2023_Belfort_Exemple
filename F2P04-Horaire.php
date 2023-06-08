<?php

/* Exemple de saisi de date et d'heure :
* heure de départ : 12
* minute de départ : 0
* seconde de départ : 0
* heure d'arrivée : 23
* minute d'arrivée : 59
* seconde d'arrivée : 59
*/
echo "heure de départ : \n";
$heureDepart = readline();
echo "minute de départ : \n";
$minuteDepart = readline();
echo "seconde de départ : \n";
$secondeDepart = readline();
echo "heure d'arrivée : \n";
$heureArrivee = readline();
echo "minute d'arrivée : \n";
$minuteArrivee = readline();
echo "seconde d'arrivée : \n";
$secondeArrivee = readline();

//Transformation de chaque horaire en seconde
$departEnS = $heureDepart * 3600 + $minuteDepart * 60 + $secondeDepart;
$arriveeEnS = $heureArrivee * 3600 + $minuteArrivee * 60 + $secondeArrivee;

$dureeEnS = $arriveeEnS - $departEnS;

//Transformation de la durée en heure, minute et seconde
$heureDuree = intdiv($dureeEnS, 3600);
$secondeRestante = $dureeEnS - $heureDuree * 3600;

$minuteDuree = intdiv($secondeRestante, 60);
$secondeDuree = $secondeRestante - $minuteDuree * 60;

//Affichage du résultat
echo "\nLa durée est de $heureDuree heure(s), $minuteDuree minute(s) et $secondeDuree seconde(s).";
