<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: Views/accueil.php");
    exit();
} else {
    header("Location: Views/LoginView.php");
    exit();
}
?>
