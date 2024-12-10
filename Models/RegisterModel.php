<?php
include_once '../Classes/DataConstructor.php';

class RegisterModel {
    private $data;

    public function __construct() {
        global $data;
        $this->data = $data;
    }

    public function registerUser($nom, $prenom, $email, $password) {
        $query = "INSERT INTO compte (nom_compte, prenom_compte, email_compte, password_compte) 
                  VALUES (:nom, :prenom, :email, :password)";
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $params = [
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':password' => $hashedPassword
        ];
    
        return $this->data->execute($query, $params);
    }

    public function emailExists($email) {
        $query = "SELECT * FROM compte WHERE email_compte = :email";
        $params = [':email' => $email];
        $result = $this->data->query($query, $params);

        return !empty($result);
    }
}
?>
