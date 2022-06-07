<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <strong>
        <?php echo $titre ?>        <?php echo $_SERVER["HTTP_USER_AGENT"]; ?>
        <?php echo $datepubli ?>
        <?php echo $editeur ?>
        <?php echo $collection ?>
        <?php echo $edition ?>
        </strong>
        <a href="Bouton.php">
        <input class="favorite styled"
               type="button"
               value="Retour">
        </a>
    </body>
</html>
