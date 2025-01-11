<?php

class ClassementModel {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function get_classement() {
        $query = "SELECT * FROM POSSEDE 
            INNER JOIN Jeu ON JEU.id_jeu = POSSEDE.id_jeu 
            INNER JOIN Compte ON compte.id_compte = POSSEDE.id_compte ORDER BY POSSEDE.temps_jeu DESC";
        return $this->data->query($query);
    }
}