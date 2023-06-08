<?php
echo "Initial : saisissez une note entre 0 et 20 : \n";
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
echo "note correcte $note";