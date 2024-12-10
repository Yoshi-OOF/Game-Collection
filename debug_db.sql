DROP DATABASE IF EXISTS gamecollection;
CREATE DATABASE gamecollection;

USE gamecollection;

CREATE TABLE COMPTE(
   id_compte INT,
   nom_compte VARCHAR(128),
   prenom_compte VARCHAR(128),
   email_compte VARCHAR(128),
   password_compte VARCHAR(128),
   PRIMARY KEY(id_compte)
);

CREATE TABLE JEU(
   id_jeu INT,
   nom_jeu VARCHAR(128),
   editeur_jeu VARCHAR(128),
   url_site_jeu VARCHAR(128),
   url_couverture_jeu VARCHAR(128),
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



INSERT INTO COMPTE VALUES
    (1, "tangi", "nom", "tangi.nom@gmail.com", "$2y$10$PVo5Mm5hvKnolSlal0K9CelwcsYaQIDi4mSmy16VmecMLbUTQM5Aq"),
    (2, "maxime", "nom", "maxime.nom@gmail.com", "$2y$10$PVo5Mm5hvKnolSlal0K9CelwcsYaQIDi4mSmy16VmecMLbUTQM5Aq"),
    (3, "nithael", "nom", "nithael.nom@gmail.com", "$2y$10$PVo5Mm5hvKnolSlal0K9CelwcsYaQIDi4mSmy16VmecMLbUTQM5Aq"),
    (4, "enzo", "nom", "enzo.nom@gmail.com", "$2y$10$PVo5Mm5hvKnolSlal0K9CelwcsYaQIDi4mSmy16VmecMLbUTQM5Aq");

INSERT INTO JEU VALUES
    (1, "GTA V", "Rockstar Games", "https://www.google.com", "https://m.media-amazon.com/images/I/71P3UUlwBdL._AC_UF1000,1000_QL80_.jpg", "2024-10-12"),
    (2, "Red Dead Redemption II", "Rockstar Games", "https://store.steampowered.com/app/1174180/Red_Dead_Redemption_2/", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFKqEd7cIt_4DOPwyDQ7W8LBfMw4DYI95sbg&s", "2024-10-12"),
    (3, "The Legend of Zelda: Breath of the Wild", "Nintendo", "https://www.google.com", "https://static.posters.cz/image/1300/toiles-the-legend-of-zelda-breath-of-the-wild-sunset-i111061.jpg", "2024-10-12"),
    (4, "Baldur's Gate III", "Larian Studios", "https://baldursgate3.game/", "https://image.api.playstation.com/vulcan/ap/rnd/202302/2321/3098481c9164bb5f33069b37e49fba1a572ea3b89971ee7b.jpg", "2024-10-12");

INSERT INTO PLATEFORME VALUES
    (1, "nintendo"),
    (2, "playstation"),
    (3, "xbox"),
    (4, "pc");

INSERT INTO POSSEDE VALUES
    (1, 3, 1562),
    (2, 4, 156521),
    (4, 1, 1565);

INSERT INTO COMPATIBLE VALUES
    (1, 2),
    (1, 3),
    (1, 4),
    (2, 2),
    (2, 4),
    (3, 1),
    (4, 2),
    (4, 3),
    (4, 4);
