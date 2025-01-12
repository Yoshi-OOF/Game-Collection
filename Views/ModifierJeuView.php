<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un jeu</title>
    <link rel="stylesheet" href="Css/ModifierJeu.css">
</head>

<body>
    <header class="header">
        <?php include __DIR__ . '/NavigationView.php'; ?>
    </header>

    <main class="modifier-jeu-container">
        <h1 class="page-title">Modifier un jeu</h1>

        <div class="content-wrapper">
            <div class="left-section">
                <h2 class="game-title"><?php echo htmlspecialchars($jeu['nom_jeu']); ?></h2>
                <p class="game-description">
                    <?php echo nl2br(htmlspecialchars($jeu['desc_jeu'])); ?>
                </p>

                <?php if (isset($jeu['temps_jeu'])): ?>
                    <p class="game-time">
                        Temps passé : <strong><?php echo (int)$jeu['temps_jeu']; ?> h</strong>
                    </p>
                <?php endif; ?>

                <h3 class="subtitle">Ajouter du temps passé sur le jeu</h3>
                <form class="form-add-time" action="index.php?action=modifierJeu&id_jeu=<?php echo (int)$jeu['id_jeu']; ?>" method="POST">
                    <label for="temps">Temps passé sur le jeu (en heures) :</label>
                    <input 
                        type="text"
                        inputmode="numeric" 
                        name="temps" 
                        id="temps" 
                        min="0" 
                        value="<?php echo isset($jeu['temps_jeu']) ? (int)$jeu['temps_jeu'] : 0; ?>"
                    >
                    <button type="submit" class="btn btn-add">
                        Ajouter
                    </button>
                </form>

                <form class="form-delete" action="index.php?action=modifierJeu&id_jeu=<?php echo (int)$jeu['id_jeu']; ?>" method="POST">
                    <input type="hidden" name="actionSupprimer" value="1">
                    <button type="submit" class="btn btn-delete">
                        Supprimer le jeu de ma bibliothèque
                    </button>
                </form>
            </div>

            <div class="right-section">
                <img 
                    class="game-cover" 
                    src="<?php echo htmlspecialchars($jeu['url_couverture_jeu']); ?>" 
                    alt="Couverture du jeu"
                >
            </div>
        </div>
    </main>

    <?php include __DIR__ . '/FooterView.php'; ?>
    
</body>
</html>