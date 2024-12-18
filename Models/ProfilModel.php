<?php

class ProfilModel {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function modify($post) {
        $query = "UPDATE compte SET nom_compte = :nom, prenom_compte = :prenom,
        password_compte = :password WHERE id_compte = :id";
        $params = [
            ':nom' => $post['nom'],
            ':prenom' => $post['prenom'],
            ':password' => password_hash($post['password'], PASSWORD_DEFAULT),
            ':id' => $_SESSION['id_compte']['id_compte']
        ];
        $this->data->query($query, $params);

    }

    public function delete() {
        $query = "DELETE FROM possede WHERE id_compte = :id";
        $params = [':id' => $_SESSION['id_compte']['id_compte']];
        $this->data->query($query, $params);

        $query = "DELETE FROM compte WHERE id_compte = :id";
        $this->data->query($query, $params);

        session_destroy();
        header("Location: index.php?action=login");
        exit();
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?action=login");
        exit();
    }

    public function getInfosCompte() {
        $query = "SELECT * FROM compte WHERE id_compte = :id";
        $params = [':id' => $_SESSION['id_compte']['id_compte']];
        return $this->data->query($query, $params)[0];
    }
}
?>