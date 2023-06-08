<?php
//Exemple d'interractions avec l'utilisation :
//Surface en are :
//40
//Prix de la suie en € / mètre cube :
//45
//Frais de transport pour 100 kg en € :
//10
//Le coût d'usage de la suie est de 2206.66 €

echo "Surface en are : \n";
$surface = readline();
echo "Prix de la suie en € / mètre cube : \n";
$prixSuie = readline();
echo "Frais de transport pour 100 kg en € : \n";
$fraisTransport = readline();

//Calcul du volume de suie (pour avoir son cout)
$volumeSuieM3 = ceil ($surface / 3);
$coutSuie = $volumeSuieM3 * $prixSuie;

//Calcul du cout de transport (pour avoir le cout total)
$poidsSuieKG = $volumeSuieM3 * 1.205 ;
$coutTransport = $fraisTransport * $poidsSuieKG / 100;

$coutTotal = $coutSuie + $coutTransport;

echo "Le coût d'usage de la suie est de $coutTotal €";
