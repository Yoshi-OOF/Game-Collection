ROP DATABASE IF EXISTS td22-5;
CREATE DATABASE td22-5;

USE td22-5;

CREATE TABLE COMPTE(
   id_compte INT,
   nom_compte VARCHAR(256),
   prenom_compte VARCHAR(256),
   email_compte VARCHAR(256),
   password_compte VARCHAR(256),
   PRIMARY KEY(id_compte)
);

CREATE TABLE JEU(
   id_jeu INT,
   nom_jeu VARCHAR(256),
   desc_jeu VARCHAR(2560),
   editeur_jeu VARCHAR(256),
   url_site_jeu VARCHAR(256),
   url_couverture_jeu VARCHAR(256),
   date_sortie_jeu DATE,
   PRIMARY KEY(id_jeu)
);

CREATE TABLE PLATEFORME(
   id_plateforme INT,
   nom_plateforme VARCHAR(128),
   PRIMARY KEY(id_plateforme)
);

CREATE TABLE POSSEDE(
   id_compte INT,
   id_jeu INT,
   temps_jeu INT,
   PRIMARY KEY(id_compte, id_jeu),
   FOREIGN KEY(id_compte) REFERENCES COMPTE(id_compte),
   FOREIGN KEY(id_jeu) REFERENCES JEU(id_jeu)
);

CREATE TABLE COMPATIBLE(
   id_jeu INT,
   id_plateforme INT,
   PRIMARY KEY(id_jeu, id_plateforme),
   FOREIGN KEY(id_jeu) REFERENCES JEU(id_jeu),
   FOREIGN KEY(id_plateforme) REFERENCES PLATEFORME(id_plateforme)
);