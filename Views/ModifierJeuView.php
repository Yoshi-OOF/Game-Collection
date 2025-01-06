<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un jeu</title>
    <link rel="stylesheet" href="Css/ModifierJeu.css">
</head>

<body>
    <header class="header">
        <?php include __DIR__ . '/NavigationView.php'; ?>
    </header>

    <main>

        <img src="assets/img/logo.png" alt="IMG DU JEU">

        <p><?php echo "Read dead redemption 2"; ?></p>
        <p><?php echo "jeu trop cool"; ?></p>

        <p>Temps passé : <?php echo "60"; ?>h</p>

        <form action="" method="post">

            <label for="nom">Temps passé sur le jeu</label>
            <input type="number" min="0" id="temps" placeholder="temps en heure" required>
            <button type="submit">AJOUTER</button>
        </form>
    </main>
    <a href="">Supprimer le jeu de ma bibliothèque</a>

    <?php include __DIR__ . '/FooterView.php'; ?>

</body>

</html>