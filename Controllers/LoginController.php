<?php
include_once '../Models/LoginModel.php';

$model = new LoginModel();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $compte = $model->authenticate($email, $password);

    if ($compte) {
        session_start();
        $_SESSION['compte'] = $compte;

        // Redirection après connexion réussie
        header('Location: BibliothequeController.php');
        exit;
    }
}

// Inclure la vue
include '../Views/LoginView.php';
