<?php



$connexionPDO = new PDO ('mysql:host=127.0.0.1;dbname=musique;charset=UTF8',
            "root",
            "",
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            )
        );



// On crée une chaine de caractère qui est la requête SQL
$requeteSQL = "SELECT * FROM auteur";

// On prépare la requête SQL : On informe le système que c'est une requête SQL, et qu'il faudra faire des traitements liés.
$pdoStat = $connexionPDO->prepare($requeteSQL);

// On exécute la requête SQL !
$pdoStat->execute();

// On récupère les résultats de la requête SQL, et on les stocke dans une variable de type tableau.
$auteurs = $pdoStat->fetchAll(PDO::FETCH_ASSOC);

if(count($auteurs) == 0)
{
    echo "Il n'y a pas d\'auteurs dans la base de données'";

}
else {
// On affiche le tableau de résultats
    echo "<table> 
        <tr>
            <th>Nom</th>
            <th>Date de naissance</th> 
        </tr>
        " ;
    for ($i = 0; $i < count($auteurs); $i++) {
        echo "<tr>
                <td>".$auteurs[$i]["nom"] . "</td>
                <td>" . $auteurs[$i]["dateNaissance"] . "</td> 
            </tr>";
    }
    echo "</table>";
}


