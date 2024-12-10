<?php
include_once '../Models/LoginModel.php';

function login() {
    $model = new LoginModel(); 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = $model->authenticate($email, $password);

        if ($user) {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: Biblioteque.php'); 
            exit;
        } else {
            $error = "Email ou mot de passe incorrect.";
            include 'Views/LoginView.php'; 
        }
    } else {
        include 'Views/LoginView.php';
    }
}
?>
