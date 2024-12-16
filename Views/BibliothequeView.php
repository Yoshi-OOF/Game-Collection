<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Game Collection</title>
    <link rel="stylesheet" href="/Game-Collection/Css/Bibliotheque.css">
</head>
<body>
    <header class="header">
        <?php include __DIR__ . '/NavigationView.php'; ?>
    </header>
    
    <main>
        <section class="hero">
            <h1>SALUT <?php echo strtoupper(htmlspecialchars($username, ENT_QUOTES, 'UTF-8')); ?> !</h1>
            <p>PR&Ecirc;T &Agrave; AJOUTER DES JEUX &Agrave; TA COLLECTION ?</p>
        </section>
        
        <section class="games">
            <h2>Mes jeux</h2>
            <div class="game-list">
                <?php foreach ($jeux as $jeu): ?>
                    <div class="game">
                        <img 
                            src="<?php echo htmlspecialchars($jeu['url_couverture_jeu'], ENT_QUOTES, 'UTF-8'); ?>" 
                            alt="<?php echo htmlspecialchars($jeu['titre'], ENT_QUOTES, 'UTF-8'); ?>">
                        <h3><?php echo htmlspecialchars($jeu['nom_jeu'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo htmlspecialchars($jeu['description_jeu'], ENT_QUOTES, 'UTF-8'); ?></p>
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
