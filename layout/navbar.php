<html>
  <head>
    <title>Barre de Navigation</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/barre.css"> 
  </head>
  <body>
    <nav class="navbar navbar-expand-md">
      <img src="../assets/img/logo.jpg" width="50" height ="50"/>
      <a class="navbar-brand" href="#">Entreprise A</a>
        <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Utilisateur</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Connexion</a>
              <a class="dropdown-item" href="#">Inscription Utilisateur</a>
            </div>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Livre</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Enregistrement Livre</a>
              <a class="dropdown-item" href="#">Mise à jour Livre</a>
              <a class="dropdown-item" href="#">Supprimer Livre</a>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link " href="#">Infos</a></li>
        </ul>
        </div>
        <li><a href="../index.php"><input class ="favorite styled" type="button" value="Déconnexion"></a></li>  <!--METTRE LIEN -->
    </nav>
  </body>
</html> 