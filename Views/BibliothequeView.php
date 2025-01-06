<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Barlow' rel='stylesheet'>
    <link rel="stylesheet" href="Css/Bibliotheque.css">
    <title>Accueil - Game Collection</title>
</head>

<body>
    <header class="header">
        <?php include __DIR__ . '/NavigationView.php'; ?>
    </header>

    <!-- PRÉSENTATION -->
    <section id="salutation">
        <h2>BONJOUR <?php echo strtoupper(htmlspecialchars($username)); ?> !</h2>
        <h2>PRÊT À AJOUTER DES JEUX À TA COLLECTION ?</h2>
    </section>

    <!-- MES JEUX -->
    <section id="my-games">
        <h2>Mes jeux</h2>

        <?php if (!empty($jeux)): ?>

            <div class="game-window">
                <div class="game-display">

                    <?php foreach ($jeux as $jeu): ?>
                        <a href="index.php?action=modifierJeu">
                            <div class="game-card">
                                <img src="<?php echo htmlspecialchars($jeu['url_couverture_jeu']); ?>" alt="RDR" height="150px">

                                <div class="card-info">
                                    <p><?php echo $jeu["nom_jeu"]; ?></p>
                                    <p><?php echo $jeu["temps_jeu"]; ?> h</p>
                                </div>
                                <div class="device">
                                    <!-- style="display: flex; gap: 10px;"> -->
                                    <?php foreach ($jeux_par_plateforme[$jeu['id_jeu']] as $platforme): ?>
                                        <p><?php echo $platforme['nom_plateforme']; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>
            <div class="error-no-games">
                <h2>Vous n'avez enregistré aucun jeu pour le moment.</h2>
                <a href="index.php?action=ajouterJeu">Ajouter un Jeu</a>
            </div>
        <?php endif; ?>
    </section>

    <!-- FOOTER -->
    <?php include __DIR__ . '/FooterView.php'; ?>
</body>

</html>