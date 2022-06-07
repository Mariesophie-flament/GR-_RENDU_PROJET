<html>
<head>
       <title>MISE A JOUR </title>
       <meta charset="utf-8">
</head>
<body>

// Mettre dans dossier layout 

    <form action="update.php" method="post">
    <table> 
        <tr>
            <td>Titre:</td>
            <td><input type="text" name="Titre"></td>
        </tr>
        <tr>
            <td>Date de Publication :</td>
            <td><input type="text" name="DateDePublication"></td>
        </tr>
        <tr>
            <td>Editeur:</td>
            <td><input type="text" name="Editeur"></td>
        </tr>
        <tr>
            <td>Collection:</td>
            <td><input type="text" name="Collection"></td>
        </tr>
        <tr>
            <td>Edition:</td>
            <td><input type="text" name="Edition"></td>
        </tr>
        <tr>
            <td>Nom:</td>
            <td><input type="text" name="Nom"></td>
        </tr>
        <tr>
            <td>Prenom:</td>
            <td><input type="text" name="Prenom"></td>
        </tr>
        <tr>
        <input type="submit" name="Mise a Jour" value="Rechercher"></tr>
    </table>
    </form>
</body>
</head>
</html>

<?php 
    include("check_update.php"); 
?>
