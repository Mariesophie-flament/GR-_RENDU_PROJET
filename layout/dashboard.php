<?php
    include("navbar.php"); 
    echo("<br>");
    include("searchForm.php");
    echo("<br>");

	include('../script/utils.php');
    include('../script/bdd_livres_connect.php'); 
	$sql = "SELECT * FROM  LivresAuteurs LEFT JOIN Livres ON LivresAuteurs.IdLivres = Livres.titre";
	   
	    $result_search = executeQuery($connexion, $sql);
		
        if (!$result_search) {
            $connexion = null;
            exit();
        }

        if ($result_search->rowCount() > 0) {
            $connexion = false;
            echo "<table>";
            foreach ($result_search as $row) {
                /** Faire joli */
                echo "<tr>";
                ?> <td><input type="radio" name="drone" value="<?php $result_search?>"> <br/></td>
                <?php
                echo "<td>" . $row["IdLivres"] . "</td>";
                echo "<td>" . "<br> " . "</td>";
                echo "<td>" . "-" . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . $row["IdAuteurs"] . "</td>";
                echo "<td>" . "<br> " . "</td>";
                echo "<td>" . "-" . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . $row["Editeur"] . "</td>";
                
                echo "</tr>";
                ?> 
                <td>
                    <div>
                    <input type="submit" value="Update">
                    <?php include("udpate.php")?>
                    </div>
                </td>

                <td>
                    <div>
                        <input type="submit" value="Read">
                    </div>
                </td>

                <td>
                    <div>
                        <input type="submit" name="SubmitDelete" value="Delete">
                        <?php $sql="DELETE FROM 'Livres' WHERE id =$drone"?>
                    </div>
                </td>

                <?php

            }
            echo "</table>";
        } else {
            echo "<p> Aucun résultats trouvés. </p>";
        }
    
    ?>

        
<html>
  <head>
    <title>Dashboard</title>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href="../assets/css/dashboard.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  </head>

  <body>
      <form method="post" action="dashboard.php">
     
  </body>
</html>