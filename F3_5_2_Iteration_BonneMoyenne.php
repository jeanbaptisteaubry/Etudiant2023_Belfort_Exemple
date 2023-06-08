<?php
echo "combien de bonnes notes voulez vous moyenner ?";
$nbNotes = readline();

$somme = 0;
for($i = 1; $i <= $nbNotes; $i = $i + 1)
{
    echo "Initial : saisissez une note $i entre 0 et 20 : \n";
    $note = readline();
    while ($note < 0 or $note > 20) {
        if($note < 0)
        {
            echo "note négative, elle doit être >= 0 \n";
        }
        else //ici, $note > 20
        {
            echo "note supérieure à 20, elle doit être <= 20 \n";
        }
        echo "Boucle : saisissez une note entre 0 et 20 : \n";
        $note = readline();
    }
    echo "note $i correcte $note  \n";
    $somme = $somme + $note;
}

$moyenne = $somme / $nbNotes;
echo "Votre moyenne est de $moyenne";