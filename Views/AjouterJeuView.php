<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/AjouterJeu.css">
    <title>Ajouter un jeu</title>
</head>

<body>
    <header class="header">
        <?php include __DIR__ . '/NavigationView.php'; ?>
    </header>
    <main>
        <h1>Ajouter un jeu à sa bibliothèque</h1>
        <form action="">
            <input type="text" placeholder="Rechercher un jeu">
            <button type="submit">RECHERCHER</button>
        </form>

        <?php if (true): ?> <!-- Si une recherche viens d'être realisé -->
            <h2>Resultats de la recherche</h2>

        <?php else: ?>
            <h2>Les jeux les plus demandés</h2>
        <?php endif; ?>
    </main>

    <?php include __DIR__ . '/FooterView.php'; ?>
</body>

</html>