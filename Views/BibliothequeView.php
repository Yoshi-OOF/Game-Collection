<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['compte'])) {
    header("Location: ../Views/LoginView.php");
    exit();
}

$username = $_SESSION['compte']['nom_compte'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Game Collection</title>
    <link rel="stylesheet" href="../Css/Biblioteque.css">
</head>
<body>
    <header class="header">
        <?php include('NavigationView.php'); ?>
    </header>
    
    <main>
        <section class="hero">
            <h1>SALUT <?php echo strtoupper($username); ?> !</h1>
            <p>PR&Ecirc;T &Agrave; AJOUTER DES JEUX &Agrave; TA COLLECTION ?</p>
        </section>
        
        <section class="games">
            <h2>Mes jeux</h2>
            <div class="game-list">
                <?php foreach ($jeux as $jeu): ?>
                    <div class="game">
                        <img 
                            src="<?php echo htmlspecialchars($jeu['url_couverture_jeu']); ?>" 
                            alt="<?php echo htmlspecialchars($jeu['titre']); ?>">
                        <h3><?php echo htmlspecialchars($jeu['nom_jeu']); ?></h3>
                        <p><?php echo htmlspecialchars($jeu['description_jeu']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    
    <footer>
        <p>Game Collection - 2025 - Tous droits r&eacute;serv&eacute;s</p>
    </footer>
</body>
</html>
