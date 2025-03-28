<?php
// MEME CODE QUE POUR LE DASHBOARD AVEC EN PLUS LES BOUTON APPROBATION ET SUPPRESSION 
include("navbar_admin.php"); 
echo("<br>");
include("searchForm.php");
echo("<br>");
    
?>

<div class ="marge">  
    <!-- BOUTON UPDATE DELETE ET READ -->
    <a href="update.php" text-align="center"><button style="color : #fff; background-color: #002D72"> Update </button></a>   
    <input type="submit" style="color : #fff; background-color: #002D72" value="Read">
    <a href="delete_admin.php" text-align="center"><button style="color : #fff; background-color: #DA291C" >Delete</button></a> 

    <?php include('../script/delete_book.php')?>
</div>

<html>
    <head>
        <title>Dashboard</title>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="../assets/css/dashboard.css" rel="stylesheet" type="text/css" />

                                                        <!-- LIEN BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    </head>

    <body>
        <!-- FORMULAIRE -->
        <form method="post" action="dashboard.php">
        <?php

        // LIEN VERS LA BDD
        include('../script/utils.php');
        include('../script/bdd_livres_connect.php'); 

        // AFFICHAGE DU TITRE, EDITEUR ET NOM DE L'AUTEUR LIEN AVEC LA TABLE DE JOINTURE
        $sql = "SELECT * FROM  LivresAuteurs LEFT JOIN Livres ON LivresAuteurs.IdLivres = Livres.titre ORDER BY IdAuteurs ";
	    $result_search = executeQuery($connexion, $sql);
		
        if (!$result_search) {
            $connexion = null;
            exit();
        }

        if ($result_search->rowCount() > 0) {
            $connexion = false;

            echo "<table>";
            echo "<th >" . "" . "</th>";
            echo "<th >" . "Titre" . "</th>";
            echo "<td>" . "<br> " . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<th >" . "Auteur" . "</th>";
            echo "<td>" . "<br> " . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<th >" . "Editeur " . "</th>";

            foreach ($result_search as $row) {
                echo "<tr>";
        ?>      <!-- BOUTON RADIO DEVANT CHAQUE INFOS DU LIVRE --> 
        <td ><input type="radio" name="drone" value="<?php $result_search?>"> <br/></td>
        <?php
        // AFFICHAGE DU TITRE, EDITEUR ET NOM DE L'AUTEUR
                echo "<td >" . $row["IdLivres"] . "</td>";
                echo "<td>" . "<br> " . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . $row["IdAuteurs"] . "</td>";
                echo "<td>" . "<br> " . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . $row["Editeur"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p> Aucun résultats trouvés. </p>";
        }
    ?>
    </body>
 </html>
