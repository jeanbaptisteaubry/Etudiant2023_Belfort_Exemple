<?php
echo "
<html>
    <head>
        <title>Exemple de réponse</title>
    </head>
    <body>
        <h1>
Exemple de réponse
</h1>";

if($_POST["action"] == "btnInscrire")
    echo "Bonjour " . $_POST["prenom"] . " " . $_POST["nom"];

if($_POST["action"] == "btnAnnuler")
    echo "Vous avez annulé votre inscription";

echo "
    </body>
</html>";