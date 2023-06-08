<?php
echo "combien de notes voulez vous moyenner ?";
$nbNotes = readline();

$somme = 0;
for($i = 1; $i <= $nbNotes; $i = $i + 1)
{
    echo "Saisir votre note $i : \n";
    $note = readline();
    $somme = $somme + $note;
}

$moyenne = $somme / $nbNotes;
echo "Votre moyenne est de $moyenne";