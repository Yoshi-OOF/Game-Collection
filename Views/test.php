<!-- 
Variable neccesaires :
- games : Array
-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Barlow' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body>

    <header>
        <img src="../Assets/img/logo.png" alt="LOGO" height="70px">
        <nav>
            <a href="#">MA BIBLIOTHÈQUE</a>
            <a href="#">AJOUTER UN JEU</a>
            <a href="#">CLASSEMENT</a>
            <a href="#">PROFIL</a>
        </nav>
    </header>

    <!-- PRÉSENTATION -->
    <section id="salutation">
        <h2>BONJOUR {PRENOM}!</h2>
        <h2>PRÊT À AJOUTER DES JEUX À TA COLLECTION ?</h2>
    </section>

    <!-- MES JEUX -->
    <section id="my-games">
        <h2>Mes jeux</h2>

        <?php if (!empty($games)): ?>

            <div class="game-window">
                <div class="game-display">

                    <?php foreach ($games as $game): ?>
                        <a href="#">
                            <div class="game-card">
                                <img src="../Assets/img/bg_zelda.jpg" alt="RDR">

                                <div class="card-info">
                                    <p><?php echo $game["nom_jeu"]; ?></p>
                                    <p><?php echo $game["temps_jeu"]; ?> h</p>
                                </div>
                                <div class="device">
                                    <p><?php echo $game["nom_plateforme"]; ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>
            <div class="error-no-games">
                <h2>Vous n'avez enregistré aucun jeu pour le moment.</h2>
                <a href="#">Ajouter un jeu</a>
            </div>
        <?php endif; ?>
    </section>

    <!-- FOOTER -->
    <footer>
        <h3>Game Collection - 2023 - Tous droits réservés</h3>
    </footer>
</body>

</html>