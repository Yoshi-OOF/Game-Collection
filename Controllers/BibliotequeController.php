<?php
require_once '../Models/BibliotequeModel.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$model = new BibliotequeModel();
$jeux = $model->get_jeux($_SESSION['compte']);
include '../Views/BibliotequeView.php';

?>