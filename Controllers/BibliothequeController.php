<?php
require_once '../Models/BibliothequeModel.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$model = new BibliothequeModel();
$jeux = $model->get_jeux($_SESSION['compte']);
include '../Views/BibliotequeView.php';

?>