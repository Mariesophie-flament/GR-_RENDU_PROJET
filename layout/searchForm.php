<html>
    <head>

        <title>Recherche</title>
	<meta charset="UTF-8">
        <link href="../assets/css/dashboard.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
                                                                <!-- LIEN BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    </head>

    <body>
        <div class ="marge">
            <form method="post">
            Titre du livre 
            <input type="text" name="titre"> <!-- Bouton pour rentrer le titre du livre recherché -->
            <!-- Bouton rechercher --> 
            <input type="submit" name="Rechercher" style="color : #fff; background-color: #002D72"value="Rechercher">  
            </form>
        </div>
    </body>

</html>


<?php

$titre = isset($_POST["titre"])? $_POST["titre"] : "";
if ($titre != "") {
    // LIEN VERS LE BDD
    include('../script/utils.php');
    include('../script/bdd_livres_connect.php'); 

    // AFFICHAGE DU TITRE, EDITEUR ET NOM DE L'AUTEUR LIEN AVEC LA TABLE DE JOINTURE
    $sql = "SELECT * FROM  LivresAuteurs LEFT JOIN Livres ON LivresAuteurs.IdLivres = Livres.titre"; 
    $result_search = executeQuery($connexion, $sql);
    
    if ($result_search->rowCount() > 0) {
        echo "<table>"; // TABLE QUI AFFFICHE LE TITRE, L'ÉDITEUR ET LE NOM DE L'AUTEUR DU LIVRE 
        foreach ($result_search as $row) {
            if ($titre == $row["Titre"]){
                echo "<td >" . $row["IdLivres"] . "</td>";
                echo "<td>" . "<br> " . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . $row["IdAuteurs"] . "</td>";
                echo "<td>" . "<br> " . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . $row["Editeur"] . "</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    }  
}
    
?>
