<?php
echo "Combien de bouteilles sont vendues ? \n";
$nbBouteilles = readline();

$montantAvantPort = 3.75 * $nbBouteilles;

if($montantAvantPort < 1000)
{
    $port = $montantAvantPort * 0.05;
}
else
{
    $port = 0;
}
$montantTotal = $montantAvantPort + $port;
echo "Le montant total est de $montantTotal dont $port de port";
