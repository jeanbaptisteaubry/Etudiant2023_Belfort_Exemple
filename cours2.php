<?php
echo "Quel est le prix d'un bonbon ?";
$prixBonbon = readline();

echo "Combien de bonbons voulez-vous ?";
$nbBonbons = readline();

$cout = $prixBonbon * $nbBonbons;

echo "Le cout est de $cout";
