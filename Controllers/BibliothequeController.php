<?php

include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Classes/DataConstructor.php';

if (!isset($_SESSION['compte'])) {
    header("Location: index.php?action=login");
    exit();
}

$model = new BibliothequeModel($pdo);
$jeux = $model->get_jeux($_SESSION['compte']);

$jeux_par_plateforme = [];

foreach ($jeux as $jeu) {
    $id_jeu = $jeu['id_jeu'];
    $plateformes = $model->get_platformes($id_jeu);
    $jeux_par_plateforme[$id_jeu] = $plateformes;
}

$username = $_SESSION['compte']['prenom_compte'];
include __DIR__ . '/../Views/BibliothequeView.php';

?>
