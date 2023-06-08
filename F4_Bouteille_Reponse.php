<?php
$nbBouteilles = $_POST["nbBouteilles"];
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

echo "
<html>
    <head>
        <title>Exemple de réponse</title>
    </head>
    <body>
        <h1>
Exemple de réponse
</h1>";

if ($_POST["action"] == "btnAcheter")
    echo "Le montant total est de $montantTotal dont $port de port";;

echo "
    </body>
</html>";
