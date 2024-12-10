<?php
include_once '../Models/RegisterModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    $registerModel = new RegisterModel();

    // Validation des champs
    if (empty($nom) || empty($prenom) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "Tous les champs doivent être remplis.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L'adresse email est invalide.";
        exit;
    }

    if ($password !== $confirmPassword) {
        echo "Les mots de passe ne correspondent pas.";
        exit;
    }

    // Vérification de l'existence de l'email
    if ($registerModel->emailExists($email)) {
        echo "L'adresse email est déjà utilisée.";
        exit;
    }

    // Enregistrement de l'utilisateur
    $success = $registerModel->registerUser($nom, $prenom, $email, $password);

    if ($success) {
        echo "Inscription réussie !";
        header("Location: LoginView.php");
        exit;
    } else {
        echo "Une erreur est survenue lors de l'inscription.";
    }
}
?>
