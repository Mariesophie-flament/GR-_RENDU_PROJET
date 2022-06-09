# GR3_RENDU_PROJET

| Groupe 3      |               |               |               |               |               |
| ------------- |:-------------:|:-------------:|:-------------:|:-------------:|:-------------:|
| N°            | 1             | 2             | 3             | 4             | 5             |
| Membres       |Capucine Frossard| Lynn Floc'h| Marie-Sophie Flament| Victor Favre| Marc-André Genteuil|

# Instructions SQL

**Base de données Utilisateurs:**

  CREATE TABLE Roles (

    ID int(10) UNSIGNED NOT NULL AUTO_INCREMENT,

    Nom varchar(255) NOT NULL;
  ) 

  ADD PRIMARY KEY (ID);

  CREATE TABLE Utilisateurs (

    ID int(10) UNSIGNED NOT NULL AUTO_INCREMENT,

    Pseudo varchar(255) NOT NULL,

    Nom varchar(255) NOT NULL,

    Prenom varchar(255) NOT NULL,

    DateNaissance date NOT NULL,

    AdresseElectronique varchar(255) NOT NULL,

    MotDePasse varchar(255) NOT NULL,

    Approuve tinyint(1);
  ) 

ADD PRIMARY KEY (ID);

CREATE TABLE UtilisateursRoles (

    IdUtilisateurs int(10) UNSIGNED NOT NULL,

    IdRoles int(10) UNSIGNED NOT NULL;
  
) 

  ADD PRIMARY KEY (IdUtilisateurs,IdRoles);
  
  ADD CONSTRAINT utilisateursroles_ibfk_1 FOREIGN KEY (IdUtilisateurs) REFERENCES Utilisateurs (ID);
  
  ADD CONSTRAINT utilisateursroles_ibfk_2 FOREIGN KEY (IdRoles) REFERENCES Roles (ID);


**Base de données Books:**

  CREATE TABLE Auteurs (

    Nom varchar(255) NOT NULL,

    Prenom varchar(255) NOT NULL;

  ) 

ADD PRIMARY KEY (Nom,Prenom);


  CREATE TABLE Livres (

    Titre varchar(255) NOT NULL,

    DatePublication date NOT NULL,

    Editeur varchar(255),

    Collection varchar(255),

    Edition varchar(255),

    Approuve tinyint(1);

  ) 

ADD PRIMARY KEY (Titre,DatePublication);


  CREATE TABLE LivresAuteurs (

    IdLivres varchar(255) NOT NULL,

    IdAuteurs varchar(255) NOT NULL;

  ) 

  ADD PRIMARY KEY (IdLivres,IdAuteurs);
  
  ADD CONSTRAINT livresauteurs_ibfk_1 FOREIGN KEY (IdLivres) REFERENCES Livres (Titre);
  
  ADD CONSTRAINT livresauteurs_ibfk_2 FOREIGN KEY (IdAuteurs) REFERENCES Auteurs (Nom);
  
  
  # Les Différentes Fonctionnalités 
  
  ### Connexion aux BDD
  
  **Difficultés rencontrées :** 
  
  Difficulté avec le suivi des dossiers et le sql : localhost sur mac. 
  Aide afin de créer de bon fichier, car nous utilisions de vieilles commandes avec mysqli. 
  
  **Choix techniques :**
  
  //
  
  **Liens + Documentations :** 
  
  Cours sur le campus + Aide 
  
  ### Connexion 
  
  **Difficultés rencontrées :** 
  
  **Choix techniques :**
  
  Formulaire de création sur une autre page si l'utilisateur ne rentre pas le bon mdp et nom d'utilisateur.
  Si le mdp et le nom sont corrects alors on est redirigés vers le dashboard grâce à un include. 
  
  **Liens + Documentations :** 
  
  https://www.php.net/manual/fr/mysqli.quickstart.multiple-statement.php
  https://leblogducodeur.fr/les-sessions-en- php/#:~:text=Les%20sessions%20PHP%20%3A%20utiliser%20la%20fonction%20isset&text=Cette%20dernière%2C%20qui%20s'utilise,la%20variable%20existe%20ou%20non.
  https://pixabay.com/fr/photos/palais-national-de-mafra-5118010/
  
  ### Dashboard 
  
   **Difficultés rencontrées :** 
   
   Mettre en page les différentes fonctionnnalités, nous avons eu du mal à placer les marges sur la page car les boutons sont sur la 1ere colonne du formulaire malgré la présence dans les dossiers css de la fonction margin-left et margin-right. 
   Faire le lien entre le dashboard et les différentes fonctionnalités comme la suppression d'un élement SQL avec le delete_book.php
  
  **Choix techniques :**
  
  Créer 2 dashboard : 1 pour l'administrateur où il est possible pour lui de supprimer et de faire l'approbation.
  1 autre pour un simple visiteur. 
  
  Mettre la barre de recherche en haut et d'être dirigé vers une autre page affichant les élements du livre recherché. 
  De même pour le Update qui nous redirige vers une page de mise à jour, et l'approbation où on peut approuver des utlisateurs pas encore approuvé. 
  
  **Liens + Documentations :** 
  
  https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input/radio
  
  ### Barre de Navigation 
  
   **Difficultés rencontrées :** 
   
   Nous n'avons pas réussi à introduire le nom de l'utilisateur connecté dans la barre de navigation. 
   Imcompréhension des attendus du VueJs et des fonctions à créer pour le comportement. 
  
  **Choix techniques :**
  
  Nous avons simplement mit le logo de l'entreprise que nous avons crée de même dimension que la barre de navigation. 
  Lorsque l'on clique sur le bouton déconnexion, il supprime la session en cours avec l'instruction session_destroy() puis redirige l'utilisateur vers la page de connexion. 
  Lorsque l'on clique sur enregistrement ou approbation on est redirigé vers un formulaire, une autre page où lorsque l'on clique sur un bouton submit, nous retombons sur le dashboard. 
  La barre de navigation est faite avec une des couleurs imposées par le cahier des charges. 
  
  **Liens + Documentations :** 
  
  https://www.pierre-giraud.com/bootstrap-apprendre-cours/barre-navigation/
  https://bootstrap-top-design.com/realiser-barre-de-navigation-bootstrap/
  
  ### Déconnexion 
  
   **Difficultés rencontrées :** 
   
   Aucunes 
  
  **Choix techniques :**
  
  D'être rediigé vers la page de connexion lorsque l'on appuie sur le bouton déconnexion.
  La session est détruite avec la commande session_destroy(). 
  
  **Liens + Documentations :** 
  
  Cours sur le campus. 
  http://www.lephpfacile.com/manuel-php/function.session-destroy.php
  
  ### Création d'un enregistrement 
  
   **Difficultés rencontrées :** 
   
  Difficulté avec la commande insertion, lien entre la BDD et le code, mais on a réussi à régler ce probléme.
  
  **Choix techniques :**
  
  Être dirigé vers un formulaire pour remplir les données du nouveau livre à rajouter.  
  
  **Liens + Documentations :** 
  
  https://www.w3schools.com/php/php_mysql_insert.asp
  https://fr.vuejs.org/v2/guide/components.html
  
  ### Mise à jour/ Lecture/ Suppresion d'un enregistrement 
  
   **Difficultés rencontrées :** 
   
   Pour la suppression, ou la mise à jour on a pas réussi à faire que c'était le bouton selectionné qui pouvait être mis à jour ou supprimer. 
   Difficulté dans la manipulation des boutons radios et du javascript pour concevoir des fonctions qui enregistre l'élément selectionné.
  
  **Choix techniques :**
  
  Lorsque le bouton Update est sélectionné etre redirigé vers la page Update.php pour ensuite mettre à jour un livre à partir de son titre, pas possible de modifier le titre d'un livre. 
  
  Lorsque le bouton Delete est sélectionné etre redirigé vers la page delete_book.php pour ensuite supprimer un livre à partir de son titre.
  On supprime ainsi tous ses élements dans la table SQL et sur le dashboard. 
  
  **Liens + Documentations :** 
  
  Correction des TP sur le campus.
  
  Suppresion : https://sql.sh/cours/delete
   
  MAJ : https://sql.sh/cours/update
  
  ### Approbation 
  
   **Difficultés rencontrées :** 
   
   Faire cette page sans créer de formulaire. 
   Le lien avec les boutons sur le dashboard. 
  
  **Choix techniques :**
  
  Seulement pouvoir approuver des utilisateurs qui ne sont pas encore approuvés et on les enleve de la page d'accueil lorsqu'ils sont approuvés.
  Passe de 0 à 1. 
  
  **Liens + Documentations :** 
  
  Cours sur le campus. 
  
  ### Dernière question répondue 
  
  Nous avons en globalité répondu ou essayé de répondre à toutes les questions, cependant, nous n'avons pas réussi à implémenter en VueJS et comprendre les attentes du VueJS. La partie approbation n'a pas été entierement réalisée.  
  
