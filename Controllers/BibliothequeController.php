<?php

include_once __DIR__ . '/../Classes/Data.php';

if (!isset($_SESSION['compte'])) {
    header("Location: index.php?action=login");
    exit();
}

$host = 'localhost';
$dbname = 'gamecollection';
$username = 'root';
$password = '';

$data = new Data($host, $dbname, $username, $password);

$model = new BibliothequeModel($data);
$jeux = $model->get_jeux($_SESSION['compte']);

$username = $_SESSION['compte']['prenom_compte'];
include __DIR__ . '/../Views/BibliothequeView.php';

?>
