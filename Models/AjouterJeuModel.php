<?php

class AjouterJeuModel {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function rechercherJeu($nom) {
        $query = "SELECT * FROM JEU WHERE nom_jeu LIKE :nom";
        $params = [':nom' => "%$nom%"];
    
        return $this->data->query($query, $params);
    }

    public function rechercherPlatforme($id_jeu) {
        $query = "SELECT * FROM POSSEDE INNER JOIN PLATFORME ON POSSEDE.id_platforme = PLATFORME.id_platforme 
        WHERE id_jeu LIKE :id_jeu";
        $params = [':id_jeu' => $id_jeu];
    
        return $this->data->query($query, $params);
    }

    public function ajouterJeu($nom, $desc, $editeur, $url_site, $url_couverture, $date_sortie) {
        $query = "INSERT INTO JEU (nom_jeu, desc_jeu, editeur_jeu, url_site_jeu, url_couverture_jeu, date_sortie_jeu) 
                  VALUES (:nom, :desc, :editeur, :url_site, :url_couverture, :date_sortie)";
        $params = [
            ':nom' => $nom,
            ':desc' => $desc,
            ':editeur' => $editeur,
            ':url_site' => $url_site,
            ':url_couverture' => $url_couverture,
            ':date_sortie' => $date_sortie
        ];

        $this->data->beginTransaction();

        try {
            $this->data->execute($query, $params);
            $id_jeu = $this->data->lastInsertId();
            $this->ajouterCompte($id_jeu, $this->data->getCompteId());
            $this->data->commit();
        } catch (Exception $e) {
            $this->data->rollBack();
            throw $e;
        }
    
        return true;
    }

    public function ajouterCompte($id_jeu, $id_compte) {
        $query = "INSERT INTO POSSEDE (id_jeu, id_compte) VALUES (:id_jeu, :id_compte)";
        $params = [
            ':id_jeu' => $id_jeu,
            ':id_compte' => $id_compte
        ];
    
        return $this->data->execute($query, $params);
    }
}
?>