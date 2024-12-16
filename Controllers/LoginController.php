<?php
include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Models/LoginModel.php';


$host = 'localhost';
$dbname = 'gamecollection';
$username = 'root';
$password = '';

$data = new Data($host, $dbname, $username, $password);

$model = new LoginModel($data);
echo "LoginController inclus<br>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "LoginController inclus<br>";
    
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
