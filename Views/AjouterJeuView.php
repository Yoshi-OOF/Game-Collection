<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un jeu</title>
    <link rel="stylesheet" href="Css/AjouterJeu.css">
</head>
<body>
    <header class="header">
        <?php include __DIR__ . '/NavigationView.php'; ?>
    </header>
    <main>
        <h1>Ajouter un jeu à sa bibliothèque</h1>
        <p>Le jeu que vous souhaitez ajouter n'existe pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouté à votre bibliothèque !</p>
        <form method="POST" action="index.php?action=bibliotheque">
            <label for="nom">Nom du jeu</label>
            <input type="text" id="nom" placeholder="Nom du jeu">

            <label for="editeur">Éditeur du jeu</label>
            <input type="text" id="editeur" placeholder="Éditeur du jeu">

            <label for="sortie">Sortie du jeu</label>
            <input type="date" id="sortie">

            <label>Plateformes</label>
            <div class="checkbox-group">
                <label><input type="checkbox"> Playstation</label>
                <label><input type="checkbox"> Xbox</label>
                <label><input type="checkbox"> Nintendo</label>
                <label><input type="checkbox"> PC</label>
            </div>

            <label for="description">Description du jeu</label>
            <textarea id="description" placeholder="Description du jeu"></textarea>

            <label for="cover">URL de la cover</label>
            <input type="text" id="cover" placeholder="URL de la cover">

            <label for="site">URL du site</label>
            <input type="text" id="site" placeholder="URL du site">

            <button type="submit">AJOUTER LE JEU</button>
        </form>
    </main>
</body>
</html>
