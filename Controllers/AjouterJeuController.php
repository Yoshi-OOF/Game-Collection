<?php
include_once '../Models/AjouterJeuModel.php';

$model = new AjouterJeuModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $desc = trim($_POST['desc'] ?? '');
    $editeur = trim($_POST['editeur'] ?? '');
    $url_site = trim($_POST['url_site'] ?? '');
    $url_couverture = trim($_POST['url_couverture'] ?? '');
    $date_sortie = trim($_POST['date_sortie'] ?? '');

    if ($nom && $desc && $editeur && $url_site && $url_couverture && $date_sortie) {
        $jeu = $model->ajouterJeu($nom, $desc, $editeur, $url_site, $url_couverture, $date_sortie);
        if ($jeu) {
            // Redirection après ajout réussi
            header('Location: BibliotequeController.php');
            exit;
        } else {
            $error = "Erreur lors de l'ajout du jeu.";
        }
    } else {
        $error = "Tous les champs sont obligatoires.";
    }
}

// Inclure la vue
include '../Views/AjouterJeuView.php';
?>