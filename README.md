# GR-_RENDU_PROJET


### Instructions SQL

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

    Approuve tinyint(1) NOT NULL;
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

    Editeur varchar(255) DEFAULT NULL,

    Collection varchar(255) DEFAULT NULL,

    Edition varchar(255) DEFAULT NULL,

    Approuve tinyint(1) DEFAULT NULL;

  ) 

ADD PRIMARY KEY (Titre,DatePublication);


  CREATE TABLE LivresAuteurs (

    IdLivres varchar(255) NOT NULL,

    IdAuteurs varchar(255) NOT NULL;

  ) 

  ADD PRIMARY KEY (IdLivres,IdAuteurs);
  
  ADD CONSTRAINT livresauteurs_ibfk_1 FOREIGN KEY (IdLivres) REFERENCES Livres (Titre);
  
  ADD CONSTRAINT livresauteurs_ibfk_2 FOREIGN KEY (IdAuteurs) REFERENCES Auteurs (Nom);
