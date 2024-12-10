<?php
class AccueilController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function afficher_jeux() {
        $jeux = $this->model->get_jeux();
        include 'Views/AccueilView.php';
    }
}
?>
