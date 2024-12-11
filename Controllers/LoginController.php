<?php
include_once '../Models/LoginModel.php';

$model = new LoginModel();
$error = ''; // Variable pour les messages d'erreur

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email)) {
        $error = "Veuillez entrer une adresse email.";
    } elseif (empty($password)) {
        $error = "Veuillez entrer un mot de passe.";
    } else {
        $id_compte = $model->authenticate($email, $password);

        if ($id_compte) {
            session_start();
            $_SESSION['id_compte'] = $id_compte;

            // Redirection après connexion réussie
            header('Location: BibliotequeController.php');
            exit;
        } else {
            $error = "Identifiants incorrects.";
        }
    }
}

// Inclure la vue avec le message d'erreur (si présent)
include '../Views/LoginView.php';
