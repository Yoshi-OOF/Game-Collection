<?php
require_once 'Models/BibliotequeModel.php';

function afficher_jeux() {
    $model = new BibliotequeModel();
    $jeux = $model->get_jeux();
    include 'Views/BibliotequeView.php';
}
?>
