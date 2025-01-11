<?php

include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Classes/DataConstructor.php';

if (!isset($_SESSION['compte'])) {
    header("Location: index.php?action=login");
    exit();
}

$model = new ProfilModel($pdo);

$infos_compte = $model->getInfosCompte();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    switch ($action) {
        case 'modify':
            if (empty($_POST['password']) || empty($_POST['confirm-password'])) {
                $error = "Veuillez remplir les champs mot de passe et confirmation";
                include __DIR__ . '/../Views/ProfilView.php';
                exit();
            }

            if ($model->emailExists($_POST['email'], $_SESSION['compte']['id_compte'])) {
                $error = "Cet email est déjà utilisé";
                include __DIR__ . '/../Views/ProfilView.php';
                exit();
            }
            if ($_POST['password'] !== $_POST['confirm-password']) {
                $error = "Les mots de passe ne correspondent pas";
                include __DIR__ . '/../Views/ProfilView.php';
                exit();
            }
            $model->modify($_POST);
            $success = "Profil modifié avec succès";
            break;
        case 'delete':
            $model->delete();
            break;
        case 'logout':
            $model->logout();
            break;
        default:
            break;
    }
}

include __DIR__ . '/../Views/ProfilView.php';

?>