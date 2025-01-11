<?php

class AjouterJeuModel {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function rechercherJeu($nom) {
        $query = "SELECT * FROM jeu WHERE nom_jeu LIKE :nom";
        $params = [':nom' => "%$nom%"];
    
        return $this->data->query($query, $params);
    }

    public function ajouterJeu($nom, $desc, $editeur, $url_site, $url_couverture, $date_sortie) {
        $query = "INSERT INTO jeu (nom_jeu, desc_jeu, editeur_jeu, url_site_jeu, url_couverture_jeu, date_sortie_jeu) 
                  VALUES (:nom, :desc, :editeur, :url_site, :url_couverture, :date_sortie)";
        $params = [
            ':nom' => $nom,
            ':desc' => $desc,
            ':editeur' => $editeur,
            ':url_site' => $url_site,
            ':url_couverture' => $url_couverture,
            ':date_sortie' => $date_sortie
        ];
    
        
        return $this->data->execute($query, $params);
    }

    public function ajouterCompte($id_jeu, $id_compte) {
        $query = "INSERT INTO possede (id_jeu, id_compte) VALUES (:id_jeu, :id_compte)";
        $params = [
            ':id_jeu' => $id_jeu,
            ':id_compte' => $id_compte
        ];
    
        return $this->data->execute($query, $params);
    }
}
?>