<?php
include_once __DIR__ . '/../Classes/Data.php';

$host = 'localhost';
$dbname = 'gamecollection';
$username = 'root';
$password = '';

$data = new Data($host, $dbname, $username, $password);

$model = new RegisterModel($data);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    var_dump($nom);

    if ($password !== $confirmPassword) {
        echo "Les mots de passe ne correspondent pas.";
        exit();
    }

    if ($model->emailExists($email)) {
        echo "Cet email est déjà utilisé.";
        exit();
    }

    $result = $model->registerUser($nom, $prenom, $email, $password);

    if ($result) {
        header("Location: index.php?action=bibliotheque");
    } else {
        echo "Erreur lors de l'inscription.";
    }
}
?>
