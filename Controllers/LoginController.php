<?php
include_once '../Models/LoginModel.php';

class LoginController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $user = $this->model->authenticate($email, $password);

            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                header('Location: dashboard.php'); // Redirection après login
                exit;
            } else {
                $error = "Email ou mot de passe incorrect.";
                include 'Views/LoginView.php'; // Recharge la vue avec un message d'erreur
            }
        } else {
            include 'Views/LoginView.php'; // Affiche la vue initiale
        }
    }
}
?>
