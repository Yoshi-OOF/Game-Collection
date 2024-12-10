<?php
include_once '../Classes/DataConstructor.php';

class LoginModel {
    private $data;

    public function __construct() {
        global $data;
        $this->data = $data;
    }

    public function get_jeux() {
        $query = "SELECT * FROM jeux";
        $result = $this->data->query($query);
        return $result;
    }
}
?>
