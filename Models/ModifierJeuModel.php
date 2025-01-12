<?php

class ModifierJeuModel {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function getJeu($id) {
        $query = "SELECT * FROM JEU INNER JOIN POSSEDE ON jeu.id_jeu = POSSEDE.id_jeu WHERE jeu.id_jeu = :id AND POSSEDE.id_compte = :id_compte";  
        $params = [':id' => $id , ':id_compte' => $_SESSION['compte']['id_compte']];
        return $this->data->query($query, $params);
    }

    public function updateJeu($id, $temps) {
        $query = "UPDATE POSSEDE SET temps_jeu = :temps WHERE id_jeu = :id AND id_compte = :id_compte";
        $params = [':temps' => $temps, ':id' => $id , ':id_compte' => $_SESSION['compte']['id_compte']];
        return $this->data->execute($query, $params);
    }
    
    public function deleteJeu($id) {
        $query = "DELETE FROM POSSEDE WHERE id_jeu = :id";
        $params = [':id' => $id];
        return $this->data->execute($query, $params);
    }
}
?>