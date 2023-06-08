<?php
echo "combien de notes voulez vous moyenner ?";
$nbNotes = readline();

$somme = 0;
$i = 1;
while( $i <= $nbNotes)
{
    echo "Saisir votre note $i : \n";
    $note = readline();
    $somme = $somme + $note;
    $i++;
}

$moyenne = $somme / $nbNotes;
echo "Votre moyenne est de $moyenne";