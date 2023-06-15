<html>
    <head>
        <style>
            .like-link {
                margin: 0;
                padding: 0;
                border: none;
                text-decoration: underline;
                font: inherit;
                color: #00F;
                background: transparent;
                cursor: pointer;
            }
        </style>
        <title>
            Musique
        </title>
    </head>
    <body>

<?php

function AfficherListeChansons($connexionPDO)
{
    // On crée une chaine de caractère qui est la requête SQL
    $requeteSQL = "SELECT * FROM chanson";

// On prépare la requête SQL : On informe le système que c'est une requête SQL, et qu'il faudra faire des traitements liés.
    $pdoStat = $connexionPDO->prepare($requeteSQL);

// On exécute la requête SQL !
    $pdoStat->execute();

// On récupère les résultats de la requête SQL, et on les stocke dans une variable de type tableau.
    $chansons = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

    if(count($chansons) == 0)
    {
        echo "Il n'y a pas de chanson dans la base de données";

    }
    else {
// On affiche le tableau de résultats
        echo "<table> 
        <tr>
            <th>Titre</th>
            <th>Durée</th>
            <th>Année</th>
        </tr>
        " ;
        for ($i = 0; $i < count($chansons); $i++) {
            echo "<tr>
                <td>
                    <form> 
                        <button class='like-link' name='action' value='AfficherFormulaireMAJ'>".$chansons[$i]["titre"] . "</button>
                        <input type='hidden' name='idChanson' value='".$chansons[$i]["id"]."' />
                    </form>
                </td>
                <td>" . $chansons[$i]["duree"] . "</td>
                <td>" . $chansons[$i]["annee"] . "</td>
                <td>
                    <form>
                        <button type='submit' name='action' value='btnSupprimerChanson' >Supp.</button>
                        <input type='hidden' name='idChanson' value='".$chansons[$i]["id"]."' />
                    </form>
                </td>
            </tr>";
        }
        echo "</table>";
    }
    echo "
    <form>
    <button type='submit' name='action' value='AfficherFormulaireAjout'> Ajouter une chanson</button>
    
    </form>
    ";
}

function AfficherFormulaireDAjout()
{
    echo "
<H1>Ajouter une chanson</H1>
    <form>
    <p>
        <label for='titre'>Titre</label>
        <input type='text' name='titre'  />
    </p>
    <p>
        <label for='duree'>Durée</label>
        <input type='text' name='duree'   />
    </p>
    <p>
        <label for='annee'>Année</label>
        <input type='text' name='annee'   />
    </p>
    <p>
        <button type='submit' name='action' value='btnAjouterChanson'>
            Ajouter
        </button>
        <button type='submit' name='action' value='btnAnnulerAjoutChanson'>
            Annuler
        </button>
    </form>
    ";
}

function AfficherFormulaireMAJ($idChanson, $titre, $duree, $annee)
{
    echo "
<H1>Modifier une chanson</H1>
    <form>
    <input type='hidden' name='idChanson' value='$idChanson' />
    <p>
        <label for='titre'>Titre</label>
        <input type='text' name='titre'  value='$titre'/>
    </p>
    <p>
        <label for='duree'>Durée</label>
        <input type='text' name='duree'  value='$duree' />
    </p>
    <p>
        <label for='annee'>Année</label>
        <input type='text' name='annee'  value='$annee' />
    </p>
    <p>
        <button type='submit' name='action' value='btnValiderModifierChanson'>
            Modifier
        </button>
        <button type='submit' name='action' value='btnAnnulerModifierChanson'>
            Annuler
        </button>
    </form>
    ";
}


function BDD_Chanson_RechercherParId($connexionPDO, $idChanson)
{
    // On crée une chaine de caractère qui est la requête SQL
    $requeteSQL = "SELECT * FROM chanson WHERE id = :paramIdChanson";
    $pdoStat = $connexionPDO->prepare($requeteSQL);
    $pdoStat->bindParam(":paramIdChanson", $idChanson);
    $pdoStat->execute();
    $chansons = $pdoStat->fetchAll(PDO::FETCH_ASSOC);
    if(count($chansons) == 0)
    {
        return null;
    }
    else
    {
        if(count($chansons) == 1)
            return $chansons[0];
        else
        {
            // ERREUR !
        }
    }
}
function BDD_Chanson_Supprimer($connexionPDO, $idChanson )
{
    $requeteSQL = "delete chanson.* from chanson where id = :paramIdChanson";
    // On prépare la requête SQL : On informe le système que c'est une requête SQL, et qu'il faudra faire des traitements liés.
    $pdoStat = $connexionPDO->prepare($requeteSQL);
    $pdoStat->bindParam(":paramIdChanson", $idChanson);
    $pdoStat->execute();
}

function BDD_Chanson_Ajouter($connexionPDO, $titre, $duree, $annee)
{
    $requeteSQL = "INSERT INTO `chanson` (`id`, `titre`, `duree`, `annee`) 
                            VALUES (NULL, :paramTitre, :paramDuree, :paramAnnee);";
    // On prépare la requête SQL : On informe le système que c'est une requête SQL, et qu'il faudra faire des traitements liés.
    $pdoStat = $connexionPDO->prepare($requeteSQL);
    $pdoStat->bindParam(":paramTitre", $titre);
    $pdoStat->bindParam(":paramDuree", $duree);
    $pdoStat->bindParam(":paramAnnee", $annee);
    $pdoStat->execute();
}

function BDD_Chanson_MAJ($connexionPDO, $idChanson, $titre, $duree, $annee)
{
    $requeteSQL = "UPDATE `chanson` 
                   SET `titre` = :paramTitre, 
                       `duree` = :paramDuree, 
                       `annee` = :paramAnnee 
                   WHERE `chanson`.`id` = :paramIdChanson;";
    // On prépare la requête SQL : On informe le système que c'est une requête SQL, et qu'il faudra faire des traitements liés.
    $pdoStat = $connexionPDO->prepare($requeteSQL);
    $pdoStat->bindParam(":paramIdChanson", $idChanson);
    $pdoStat->bindParam(":paramTitre", $titre);
    $pdoStat->bindParam(":paramDuree", $duree);
    $pdoStat->bindParam(":paramAnnee", $annee);
    $pdoStat->execute();
}

$connexionPDO = new PDO ('mysql:host=127.0.0.1;dbname=musique;charset=UTF8',
    "root",
    "",
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    )
);

if(isset($_REQUEST["action"])) //Si "action" existe dans $_REQUEST
    //"Si l'utilisateur a déclenché une action"
    $action = $_REQUEST["action"];
else
    $action = "Action_Par_Defaut";



switch($action){
    case "Action_Par_Defaut" :
        //On vient d'accéder à la page

        //On voudrait afficher la liste !
        AfficherListeChansons($connexionPDO);
        break;
    case "AfficherFormulaireAjout":
        AfficherFormulaireDAjout();
        break;
    case "btnAjouterChanson":
         BDD_Chanson_Ajouter($connexionPDO, $_REQUEST["titre"], $_REQUEST["duree"], $_REQUEST["annee"]);
         AfficherListeChansons($connexionPDO);
        break;
    case "btnAnnulerAjoutChanson":
        AfficherListeChansons($connexionPDO);
        break;
    case "btnSupprimerChanson":
        BDD_Chanson_Supprimer($connexionPDO, $_REQUEST["idChanson"]);
        AfficherListeChansons($connexionPDO);
        break;
    case "AfficherFormulaireMAJ":
        $idChanson = $_REQUEST["idChanson"];
        $chanson = BDD_Chanson_RechercherParId($connexionPDO, $idChanson);
        AfficherFormulaireMAJ($chanson["id"], $chanson["titre"], $chanson["duree"], $chanson["annee"]);
        break;
    case "btnAnnulerModifierChanson":
        AfficherListeChansons($connexionPDO);
        break;
    case "btnValiderModifierChanson":
        BDD_Chanson_MAJ($connexionPDO, $_REQUEST["idChanson"], $_REQUEST["titre"], $_REQUEST["duree"], $_REQUEST["annee"]);
        AfficherListeChansons($connexionPDO);
        break;
}
?>
    </body>
</html>



