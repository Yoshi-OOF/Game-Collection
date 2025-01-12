<?php

include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Classes/DataConstructor.php';

if (!isset($_SESSION['compte'])) {
    header("Location: index.php?action=login");
    exit();
}

$model = new AjouterJeuModel($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    switch ($action) {
        case 'rechercher':
            if (empty($_POST['nom'])) {
                $error = "Veuillez entrer un nom de jeu";
                include __DIR__ . '/../Views/AjouterJeuView.php';
                exit();
            }
            $jeux = $model->rechercherJeu($_POST['nom']);
            if (empty($jeux)) {
                $error = "Le jeu que vous souhaiter ajouter n'exite pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouté à votre bibliothèque !";
                include __DIR__ . '/../Views/AjouterJeuView.php';
                exit();
            }
            $plateformes = [];
            foreach ($jeux as $jeu) {
                $plateformes[$jeu["id_jeu"]] = $model->rechercherPlateforme($jeu["id_jeu"]);
            }
            break;
        case 'creer':
            if (empty($_POST['nom']) || empty($_POST['desc']) || empty($_POST['editeur']) || empty($_POST['url_site']) || empty($_POST['url_couverture']) || empty($_POST['date_sortie'])) {
                $error = "Veuillez remplir tous les champs";
                include __DIR__ . '/../Views/AjouterJeuView.php';
                exit();
            }
            $model->ajouterJeu($_POST['nom'], $_POST['desc'], $_POST['editeur'], $_POST['url_site'], $_POST['url_couverture'], $_POST['date_sortie']);
            $success = "Jeu ajouté avec succès";
            break;
        case 'ajouterCompte':
            $model->ajouterCompte($_POST['id_jeu'], $_SESSION['compte']['id_compte']);
            $success = "Jeu ajouté à votre bibliothèque";
            break;
        default:
            break;
    }
}

// Inclure la vue
include __DIR__ . '/../Views/AjouterJeuView.php';
?>