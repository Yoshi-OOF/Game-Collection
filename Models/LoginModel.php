<?php

class LoginModel {
    private $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function authenticate($email, $password) {
        $query = "SELECT * FROM COMPTE WHERE email_compte = :email";
        $params = [':email' => $email];
        $result = $this->data->query($query, $params);

        if ($result) {
            $id_compte = $result[0];
            if (password_verify($password, $id_compte['password_compte'])) {
                return $id_compte;
            }
        }
        return false;
    }
}

?>
