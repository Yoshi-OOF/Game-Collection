<?php

include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Classes/DataConstructor.php';

if (!isset($_SESSION['compte'])) {
    header("Location: index.php?action=login");
    exit();
}

$model = new ModifierJeuModel($pdo);


if (isset($_GET['id_jeu'])) {
    $jeu = $model->getJeu($_GET['id_jeu'])[0];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['temps'])) {
        $model->updateJeu($_GET['id_jeu'], $_POST['temps']);
        header("Location: index.php?action=bibliotheque");
        exit();
    } else {
        $model->deleteJeu($_GET['id_jeu']);
        header("Location: index.php?action=bibliotheque");
        exit();
    }
}

include __DIR__ . '/../Views/ModifierJeuView.php';
?>