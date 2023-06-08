<?php
$tableauNotes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

$somme = 0;
foreach ($tableauNotes as $note)
{
    echo "$somme $note \n";
    $somme = $somme + $note;
}

$moyenne = $somme / count($tableauNotes);
echo "Votre moyenne est de $moyenne";