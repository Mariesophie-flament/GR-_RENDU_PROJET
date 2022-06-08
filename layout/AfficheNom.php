<html>
<head>
    <title>Utilisateurs à approuver</title>
</head>
<body>
    <?php 
        $sql = "SELECT COUNT(Users) FROM UtilisateursRoles LEFT JOIN Utilisateurs ON UtilisateursRoles.IdUtilisateurs = Utilisateurs.Nom";
        
        $result_search = executeQuery($connexion, $sql);


        if (!result_search) {
            $connexion = false
            echo "<table>";
            foreach ($result_search as $row) {
                echo $row["IdUtilisateurs"]
            }
        }

        if ($result_search->rowCount() > 0) {
            $connexion = null;
            exit();
        }
        
        echo $_POST['nom']
    ?>    
</body>
</html>