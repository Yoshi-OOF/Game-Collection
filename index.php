<?php
session_start();

// Load dependencies
require 'vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// require 'db.php';

if (isset($_SESSION['user_id'])) {
    header("Location: Views/accueil.php");
    exit();
} else {
    header("Location: Views/LoginView.php");
    exit();
}
?>
