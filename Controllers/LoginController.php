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

    $id_compte = $model->authenticate($email, $password);

    if ($id_compte) {
        session_start();
        $_SESSION['id_compte'] = $id_compte;
        header("Location: index.php?action=bibliotheque");
        exit();
    } else {
        echo "Identifiants incorrects.";
    }
}

?>
