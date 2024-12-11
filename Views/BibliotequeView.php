<?php
session_start();

if (!isset($_SESSION['id_compte'])) {
    header("Location: ../Views/LoginView.php");
    exit();
}

$username = $_SESSION['username'];
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
        <div class="logo">Logo</div>
        @include('Views/Navigation.php')
    </header>
    
    <main>
        <section class="hero">
            <h1>SALUT <?php echo strtoupper($username); ?> !</h1>
            <p>PRÊT À AJOUTER DES JEUX À TA COLLECTION ?</p>
        </section>
        
        <section class="games">
            <h2>Mes jeux</h2>
            <div class="game-list">
                <?php foreach ($jeux as $jeu): ?>
                    <div class="game">
                        <img 
                            src="../Assets/img/<?php echo htmlspecialchars($jeu['titre']); ?>.jpg" 
                            alt="<?php echo htmlspecialchars($jeu['titre']); ?>" 
                        >
                        <h3><?php echo $jeu['nom']; ?></h3>
                        <p><?php echo $jeu['description']; ?></p>
                    </div>
                <?php endforeach; ?>

            </div>
        </section>
    </main>
    
    <footer>
        <p>Game Collection - 2025 - Tous droits réservés</p>
    </footer>
</body>
</html>
