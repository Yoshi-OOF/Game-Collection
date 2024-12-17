<?php

include_once __DIR__ . '/../Classes/Data.php';

if (!isset($_SESSION['id_compte'])) {
    header("Location: index.php?action=login");
    exit();
}

$host = 'localhost';
$dbname = 'gamecollection';
$username = 'root';
$password = '';

$data = new Data($host, $dbname, $username, $password);

$model = new BibliothequeModel($data);
$jeux = $model->get_jeux($_SESSION['id_compte']);

$jeux_par_plateforme = [];

foreach ($jeux as $jeu) {
    $id_jeu = $jeu['id_jeu'];
    $plateformes = $model->get_plateformes_par_jeu($id_jeu);
    $jeux_par_plateforme[$id_jeu] = $plateformes;
}

$username = $_SESSION['id_compte']['prenom_compte'];
include __DIR__ . '/../Views/BibliothequeView.php';

?>
