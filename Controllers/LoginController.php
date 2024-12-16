<?php
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $model = new LoginModel();

    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $compte = $model->authenticate($email, $password);

    if ($compte) {
        $_SESSION['compte'] = $compte;

        header('Location: index.php');
        exit();
    } else {
        $error = "Identifiants invalides. Veuillez réessayer.";
    }
}

include __DIR__ . '/../Views/LoginView.php';
?>
