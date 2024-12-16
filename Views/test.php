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
    <style>
        * {
            margin: 0;
            font-family: 'Barlow', sans-serif;
            font-size: 24px;
            color: white;
        }

        html {
            background-color: #1E1B26;
        }

        /* HEADER */
        header {
            background-color: #1E1B26;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
        }

        header img {
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav {
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-size: 0.9rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* ACCUEIL */
        #salutation {
            height: 250px;
            background-image: url(../Assets/img/bg_zelda2.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 150px;
        }
        
        #salutation h2 {
            filter: brightness(150%);
            background-color: rgba(0, 0, 0, 0);
            font-size: 60px;
            color: white;
            width: 700px;
        }

        #my-games {
            background-color: #1E1B26;
            padding: 40px 150px 0px 150px;
        }

        .game-card {
            height: 300px;
            width: 400px;
            border-radius: 10px;
            margin: 15px;
        }

        .game-card img {
            width: 400px;
            border-radius: 10px;
        }

        .device {
            background-color: #1E1B26;
        }


        .card-info {
            display: flex;
            justify-content: space-between;
        }

        .card-info p {
            display: inline;
            gap: 10px;
        }

        .device p {
            color: grey;
            font-size: 20px;
        }

        .game-display a {
            transition: ease all .2s;
            position: relative;
            bottom: 0px;
            text-decoration: none;
        }

        .game-display {
            display: flex;
            flex-wrap: wrap;
        }

        .game-display a:hover {
            position: relative;
            bottom: 5px;
        }

        .error-no-games {
            padding: 25px;
            text-align: center;
        }

        /* FOOTER */
        footer {
            background-color: #1E1B26;
            text-align: center;
            padding: 60px;
        }

        footer h3 {
            font-size: 16px;
        }
    </style>
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