<?php
include_once '../Classes/DataConstructor.php';

class LoginModel {
    private $data;

    public function __construct() {
        global $data;
        $this->data = $data;
    }

    public function authenticate($email, $password) {
        $query = "SELECT * FROM users WHERE email = :email";
        $params = [':email' => $email];
        $result = $this->data->query($query, $params);
        $user = $result ? $result[0] : null;

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
?>
