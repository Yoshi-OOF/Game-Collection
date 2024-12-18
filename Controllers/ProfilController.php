<?php

include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Classes/DataConstructor.php';

if (!isset($_SESSION['id_compte'])) {
    header("Location: index.php?action=login");
    exit();
}

$model = new ProfilModel($pdo);

$infos_compte = $model->getInfosCompte();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    switch ($action) {
        case 'modify':
            if ($_POST['password'] !== $_POST['confirm-password']) {
                $error = "Les mots de passe ne correspondent pas";
                break;
            }
            $model->modify($_POST);
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