<?php
echo "Quel est le montant HT ? \n";
$montantHTAvantRemise = readline();

if ($montantHTAvantRemise < 1000) {
    $tauxRemise = 0;
} elseif ($montantHTAvantRemise < 2000) {
    $tauxRemise = 0.01;
} elseif ($montantHTAvantRemise < 5000) {
    $tauxRemise = 0.03;
} else {
    $tauxRemise = 0.05;
}

$montantRemise = $montantHTAvantRemise * $tauxRemise;
$montantHTApresRemise = $montantHTAvantRemise - $montantRemise;
$MontantTVA = $montantHTApresRemise * 0.2;
$montantTTC = $montantHTApresRemise + $MontantTVA;

echo "TauxRemise : $tauxRemise \n";
echo "MontantRemise : $montantRemise \n";
echo "MontantHTApresRemise : $montantHTApresRemise \n";
echo "MontantTVA : $MontantTVA \n";
echo "MontantTTC : $montantTTC \n";