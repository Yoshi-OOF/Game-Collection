<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/AjouterJeu.css">
    <title>Ajouter un jeu</title>
</head>
<body>
    <header>
        <img src="../Assets/img/logo.png" alt="Logo du site">
        <?php include "NavigationView.php"; ?>
    </header>

    <!-- Recherche -->
    <h2>Ajouter un jeu a sa bibliothèque</h2>
    <form action="" method="post">
        <input type="text" placeholder="Recherche un jeu">
        <button type="submit">rechercher</button>
    </form>

    <h2>Mes jeux</h2>

    <?php foreach ($jeux as $jeu):?>


    <?php endforeach; ?>

    
    <footer>Game collection - 2023 - Tous droits réservés</footer>
</body>
</html>