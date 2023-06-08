<?php
echo "limitation de vitesse : \n";
$limitation = readline();
echo "vitesse mesurée : \n";
$vitesseMesuree = readline();

if ($limitation < $vitesseMesuree) {
    $excès = $vitesseMesuree - $limitation;
    echo "excès de $excès";
} else {
    $reste = $limitation - $vitesseMesuree;
    echo "bien ! $reste";
}