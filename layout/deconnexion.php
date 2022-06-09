<html>
    <head>
        <title>Déconnexion</title>
		<meta charset="UTF-8">
        <link href="assets/css/UX.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="assets/js/vue-connexion.js" async></script>
    </head>

    <body>
        <!-- FORMULAIRE -->
        <form action="index.php" method="post">

        <?php
         
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST["Submit"] )){
                session_destroy();  // FONCTION QUI DÉTRUIT LA SESSION EN COURS LORSQUE LE BOUTON DECONNEXION EST ACTIONNÉ
            }
        ?>
    </body>
</html>