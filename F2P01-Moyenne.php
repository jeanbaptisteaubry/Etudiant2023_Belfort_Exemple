<?php
echo "Saisir votre note 1 : \n"; //\n = retour à la ligne
$note1 = readline();

echo "Saisir votre note 2 : \n";
$note2 = readline();

echo "Saisir votre note 3 : \n";
$note3 = readline();

$sommeDesNotes = $note1 + $note2 + $note3;

$moyenne = $sommeDesNotes / 3;

echo "Votre moyenne est de $moyenne";

