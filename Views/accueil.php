<?php
// Démarrer la session pour vérifier si l'utilisateur est connecté
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    // Si non connecté, redirige vers la page de connexion
    header("Location: LoginView.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Game Collection</title>
    <link rel="stylesheet" href="../Assets/styles.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur Game Collection</h1>
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="profile.php">Mon Profil</a></li>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Vos jeux préférés</h2>
            <p>Explorez votre collection de jeux et ajoutez-en de nouveaux !</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Game Collection. Tous droits réservés.</p>
    </footer>
</body>
</html>
