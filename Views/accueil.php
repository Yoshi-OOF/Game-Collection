<?php
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: LoginView.php");
    exit();
}

// Exemple de nom d'utilisateur, à remplacer par vos données dynamiques
$username = "Guillaume";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Game Collection</title>
    <link rel="stylesheet" href="../Css/styles.css">
</head>
<body>
    <header class="header">
        <div class="logo">Logo</div>
        <nav class="nav">
            <ul>
                <li><a href="accueil.php">Ma Bibliothèque</a></li>
                <li><a href="addGame.php">Ajouter un Jeu</a></li>
                <li><a href="classement.php">Classement</a></li>
                <li><a href="profile.php">Profil</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="hero">
            <h1>SALUT <?php echo strtoupper($username); ?> !</h1>
            <p>PRÊT À AJOUTER DES JEUX À TA COLLECTION ?</p>
        </section>
        
        <section class="games">
            <h2>Mes jeux</h2>
            <div class="game-list">
                <div class="game-card">
                    <img src="../Assets/red-dead-1.jpg" alt="Red Dead Redemption">
                    <div class="game-info">
                        <h3>Read dead redemption</h3>
                        <p>PlayStation</p>
                        <p>0h</p>
                    </div>
                </div>
                <div class="game-card">
                    <img src="../Assets/red-dead-2.jpg" alt="Red Dead Redemption 2">
                    <div class="game-info">
                        <h3>Read dead redemption 2</h3>
                        <p>PlayStation</p>
                        <p>10h</p>
                    </div>
                </div>
                <div class="game-card">
                    <img src="../Assets/zelda.jpg" alt="Zelda BOTW">
                    <div class="game-info">
                        <h3>Zelda BOTW</h3>
                        <p>Nintendo</p>
                        <p>0h</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <p>Game Collection - 2023 - Tous droits réservés</p>
    </footer>
</body>
</html>
