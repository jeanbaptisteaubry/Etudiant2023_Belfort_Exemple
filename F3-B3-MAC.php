<?php
echo "Choisissez votre menu : 
  1      Menu Simple              8 € ht
  2      Menu Big                   10 € ht        
  3      Menu Double            14 € ht
  4      Menu DoubleBig       16 € ht";
$choixMenu = readline();
echo "Sur place 1 ou à emporter 2 ? \n";
$choixLieu = readline();
switch($choixMenu)
{
    case 1:
        $prixMenu = 8;
        break;
    case 2:
        $prixMenu = 10;
        break;
    case 3:
        $prixMenu = 14;
        break;
    case 4:
        $prixMenu = 16;
        break;
    default:
        echo "Choix incorrect";
        break;
}

switch($choixLieu)
{
    case 1:
        $tauxTVA = 0.1;
        break;
    case 2:
        $tauxTVA = 0.2;
        break;
    default:
        echo "Choix incorrect";
        break;
}

$MontantTVA = $prixMenu * $tauxTVA;
$montantTTC = $prixMenu + $MontantTVA;

echo "MontantTVA : $MontantTVA \n";
echo "MontantTTC : $montantTTC \n";

