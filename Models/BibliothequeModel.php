<?php

class BibliothequeModel {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function get_jeux($compte) {
        $id_compte = $compte['id_compte'];
        $query = "SELECT * FROM jeu 
                    INNER JOIN POSSEDE ON jeu.id_jeu = POSSEDE.id_jeu 
                    INNER JOIN COMPTE ON POSSEDE.id_compte = COMPTE.id_compte 
                    WHERE COMPTE.id_compte = :id_compte";
        $params = [':id_compte' => $id_compte];
        return $this->data->query($query, $params);
    }

    public function get_platformes($id_jeu){
        $query = "SELECT nom_plateforme FROM Plateforme
                    INNER JOIN Compatible ON Plateforme.id_plateforme = Compatible.id_plateforme
                    WHERE Compatible.id_jeu = :id_jeu";
        $params = [':id_jeu' => $id_jeu];
        return $this->data->query($query, $params);
    } 
}

?>
