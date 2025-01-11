<?php
include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Classes/DataConstructor.php';

/* $host = 'localhost';
$dbname = 'gamecollection';
$username = 'root';
$password = '';

$data = new Data($host, $dbname, $username, $password); */

$model = new LoginModel($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $compte = $model->authenticate($email, $password);

    if ($compte) {
        session_start();
        $_SESSION['compte'] = $compte;
        header("Location: index.php?action=bibliotheque");
        exit();
    } else {
        echo "Identifiants incorrects.";
    }
}

?>
