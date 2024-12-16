<?php
include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Models/LoginModel.php';

$host = 'localhost';
$dbname = 'gamecollection';
$username = 'root';
$password = '';

$data = new Data($host, $dbname, $username, $password);

$model = new RegisterModel($data);
$modelLogin = new LoginModel($data);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    if ($password !== $confirmPassword) {
        echo "Les mots de passe ne correspondent pas.";
        exit();
    }

    if ($model->emailExists($email)) {
        echo "Ce mail est déjà utilisé.";
        exit();
    }

    $result = $model->registerUser($nom, $prenom, $email, $password);

    if ($result) {
        $id_compte = $modelLogin->authenticate($email, $password);
        session_start();
        $_SESSION['compte'] = $id_compte;
        header("Location: index.php?action=bibliotheque");
    } else {
        echo "Erreur lors de l'inscription.";
    }
}
?>
