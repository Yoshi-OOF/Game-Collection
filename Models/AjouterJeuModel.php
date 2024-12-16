<?php
include_once '../Classes/DataConstructor.php';

class AjouterJeuModel {
    private $data;

    public function __construct() {
        global $data;
        $this->data = $data;
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
}
?>