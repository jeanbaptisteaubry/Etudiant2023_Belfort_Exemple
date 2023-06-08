<html>
    <head>
        <title>Exemple formulaire</title>
    </head>
    <body>
        <h1>
            Exemple de formulaire
        </h1>
        <form method="post" action="F4-PremierFormulaire-Reponse.php">
            <p>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" />
            </p>
            <p>
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" />
            </p>
            <p>
                <button type="submit" name="action" value="btnInscrire">
                    S'inscrire
                </button>
                <button type="submit" name="action" value="btnAnnuler">
                    Annuler
                </button>
            </p>
        </form>

    </body>
</html>