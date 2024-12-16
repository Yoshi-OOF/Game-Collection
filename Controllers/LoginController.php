<?php
include_once __DIR__ . '/../Classes/Data.php';

$host = 'localhost';
$dbname = 'gamecollection';
$username = 'root';
$password = '';

$data = new Data($host, $dbname, $username, $password);

$model = new LoginModel($data);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = $model->authenticate($email, $password);

    if ($user) {
        session_start();
        $_SESSION['compte'] = $user;
        header("Location: index.php?action=bibliotheque");
        exit();
    } else {
        echo "Identifiants incorrects.";
    }
}

?>
