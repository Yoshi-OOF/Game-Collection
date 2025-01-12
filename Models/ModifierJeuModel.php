<?php

class ModifierJeuModel {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function getJeu($id) {
        $query = "SELECT * FROM jeu INNER JOIN possede ON jeu.id_jeu = possede.id_jeu WHERE jeu.id_jeu = :id AND possede.id_compte = :id_compte";  
        $params = [':id' => $id , ':id_compte' => $_SESSION['compte']['id_compte']];
        return $this->data->query($query, $params);
    }

    public function updateJeu($id, $temps) {
        $query = "UPDATE possede SET temps_jeu = :temps WHERE id_jeu = :id AND id_compte = :id_compte";
        $params = [':temps' => $temps, ':id' => $id , ':id_compte' => $_SESSION['compte']['id_compte']];
        return $this->data->execute($query, $params);
    }
    
    public function deleteJeu($id) {
        $query = "DELETE FROM possede WHERE id_jeu = :id";
        $params = [':id' => $id];
        return $this->data->execute($query, $params);
    }
}
?>