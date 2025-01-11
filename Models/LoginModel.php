<?php

class LoginModel {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function authenticate($email, $password) {
        $query = "SELECT * FROM compte WHERE email_compte = :email";
        $params = [':email' => $email];
        $result = $this->data->query($query, $params);

        if ($result) {
            $compte = $result[0];
            if (password_verify($password, $compte['password_compte'])) {
                return $compte;
            }
        }
        return false;
    }
}

?>
