<?php


echo "<html>
   <head>
       <title>Exemple formulaire</title>
   </head>
   <body>
       <h1>
Exemple de formulaire
</h1>";

if(!isset($_REQUEST["prenom"]) && !isset($_REQUEST["nom"])) {
    echo "<form method=\"post\" action=\"F4_PageUniqueQR.php\">
           <p>
               <label for=\"nom\">Nom :</label>
               <input type=\"text\" name=\"nom\" id=\"nom\" />
           </p>
           <p>
               <label for=\"prenom\">Prénom :</label>
               <input type=\"text\" name=\"prenom\" id=\"prenom\" />
           </p>
           <p>
               <label for=\"Sexe\">Sexe :</label>
               <input type=\"radio\" name=\"sexe\" value =\"H\"/>Homme
               <input type=\"radio\" name=\"sexe\" value =\"F\"/ checked >Femme
               <input type=\"radio\" name=\"sexe\" value =\"A\"/  >Autre
           </p>
           <p>
               <label for=\"Loisir\">Loisirs :</label>
               <input type=\"checkbox\" name=\"Loisir[]\" value =\"Foot\"/>Foot
               <input type=\"checkbox\" name=\"Loisir[]\" value =\"Biere\"/ checked >Biere
               <input type=\"checkbox\" name=\"Loisir[]\" value =\"JeuxVideo\"/  >Jeux Video
               <input type=\"checkbox\" name=\"Loisir[]\" value =\"Rugby\"/  >Rugby
           </p>
           <p>
               <label for=\"Profession\">Profession :</label>
               <select name=\"Profession\">
                   <option value='1'>Etudiant</option>
                   <option value='2'>Professeur</option>
                   <option value='3'>Profession intermédiaire</option>
                   <option value='4'>Employé</option>
                   <option value='5'>Ouvrier</option>
                   <option value='6'>Retraité</option>
                   <option value='7' selected>Informaticien</option>
                   <option value='-1'>Autre</option>
               </select>    
            </p>
           <p>
               <label for=\"Musique\">Musique :</label>
               <select name='Musique[]' size='8' multiple>
                     <option value='1'>Rock</option>
                     <option value='2'>Pop</option>
                     <option value='3'>Rap</option>
                     <option value='4'>Classique</option>
                     <option value='5'>Jazz</option>
                     <option value='6'>Reggae</option>
                     <option value='7' selected>Autre</option>
               </select>    
               
             </p>     
             <p>
               <label for=\"Vous\">Parlez moi de vous !</label>
               <textarea name='Vous'>
               bla bla sur vous !!
               </textarea>
               
               
             </p>  
           
           <p>
               <button type=\"submit\" name=\"action\" value=\"btnInscrire\">
    S'inscrire
               </button>
           </p>
        </form>";
}
else {
    echo "Bonjour " . $_POST["prenom"] . " " . $_POST["nom"]."<br>";

    switch($_POST["sexe"])
    {
        case "H":
            echo "Vous êtes un homme";
            break;
        case "F":
            echo "Vous êtes une femme";
            break;
        case "A":
            echo "Vous êtes autre";
            break;
    }

    if(isset($_POST["Loisir"]))
    {
        echo "<br>Avec foreach Vous aimez : ";
        foreach($_POST["Loisir"] as $loisir)
        {
            echo $loisir." ";
        }
        echo "<br>";
        echo "<br>Avec for  Vous aimez : ";
        for($i=0;$i<count($_POST["Loisir"]);$i++)
        {
            echo $_POST["Loisir"][$i]." ";
        }
        echo "<br>";

    }
    else
    {
        echo "Vous n'avez pas de loisir<br>";
    }

    echo "Profession : ";
    switch($_POST["Profession"])
    {
        case 1:
            echo "Etudiant";
            break;
        case 2:
            echo "Professeur";
            break;
        case 3:
            echo "Profession intermédiaire";
            break;
        case 4:
            echo "Employé";
            break;
        case 5:
            echo "Ouvrier";
            break;
        case 6:
            echo "Retraité";
            break;
        case 7:
            echo "Informaticien";
            break;
        case -1:
            echo "Autre";
            break;
    }
    if(isset($_POST["Musique"]))
    {
        echo "<br>Avec foreach Vous écoutez : ";
        foreach($_POST["Musique"] as $musique)
        {

            switch ($musique)
            {
                case 1:
                    echo "Rock";
                    break;
                case 2:
                    echo "Pop";
                    break;
                case 3:
                    echo "Rap";
                    break;
                case 4:
                    echo "Classique";
                    break;
                case 5:
                    echo "Jazz";
                    break;
                case 6:
                    echo "Reggae";
                    break;
                case 7:
                    echo "Autre";
                    break;
            }
        }
        echo "<br>";

    }
    else
    {
        echo "Vous n'aimez pas la musique<br>";
    }

    echo "Vous avez écrit : ".$_POST["Vous"]."<br>";

    echo "<form method=\"post\" action=\"F4_PageUniqueQR.php\">
           
               <button type=\"submit\" name=\"action\" value=\"btnRetour\">
    Retour
               </button>
           </p>
        </form>";
}
echo      " 
   </body>
</html>";


