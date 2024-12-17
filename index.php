<?php
session_start();
/*
// Load dependencies
require 'vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// require 'db.php';
*/
// Enable error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Autoload classes
spl_autoload_register(function ($class_name) {
    $paths = [
        __DIR__ . "/Controllers/" . $class_name . ".php",
        __DIR__ . "/Models/" . $class_name . ".php",
        __DIR__ . "/Classes/" . $class_name . ".php",
    ];

    foreach ($paths as $file) {
        if (file_exists($file)) {
            include_once $file;
            return;
        }
    }
});


$action = $_GET['action'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // POST requests
    switch ($action) {
        case 'login':
            include __DIR__ . '/Controllers/LoginController.php';
            break;
        case 'registerController':
            include __DIR__ . '/Controllers/RegisterController.php';
            break;
        default:
            include __DIR__ . '/Controllers/LoginController.php'; // Default login
            break;
    }
} else {
    // GET requests
    if (isset($_SESSION['id_compte'])) {
        switch ($action) {
            case 'bibliotheque':
                include __DIR__ . '/Controllers/BibliothequeController.php';
                break;
            case 'logout':
                include __DIR__ . '/Controllers/LogoutController.php';
                break;
            case 'ajouterJeu':
                include __DIR__ . '/Controllers/AjouterJeuController.php';
                break;
            case 'classement':
                include __DIR__ . '/Controllers/ClassementController.php';
                break;
            default:
                include __DIR__ . '/Controllers/BibliothequeController.php'; // Default Bibliotheque
                break;
        }
    } else {
        if ($action === 'register') {
            include __DIR__ . '/Views/RegisterView.php';
        } else {
            include __DIR__ . '/Views/LoginView.php';
        }
    }
}
?>
