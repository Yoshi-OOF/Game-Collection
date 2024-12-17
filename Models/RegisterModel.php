<?php

class RegisterModel {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function registerUser($nom, $prenom, $email, $password) {
        $query = "INSERT INTO COMPTE (nom_compte, prenom_compte, email_compte, password_compte) 
                VALUES (:nom, :prenom, :email, :password)";
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $params = [
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':password' => $hashedPassword
        ];

        $result = $this->data->execute($query, $params);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function emailExists($email) {
        $query = "SELECT * FROM compte WHERE email_compte = :email";
        $params = [':email' => $email];
        $result = $this->data->query($query, $params);

        return !empty($result);
    }
}
?>
