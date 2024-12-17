<?php

class ClassementModel {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function get_classement() {
        $query = "SELECT * FROM Possede 
            INNER JOIN Jeu ON jeu.id_jeu = Possede.id_jeu 
            INNER JOIN Compte ON compte.id_compte = Possede.id_compte ORDER BY Possede.temps_jeu DESC";
        return $this->data->query($query);
    }
}