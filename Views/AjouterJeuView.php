<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/AjouterJeu.css">
    <link rel="stylesheet" href="Css/ItemCard.css">
    <title>Ajouter un jeu</title>
</head>

<body>
    <header class="header">
        <?php include __DIR__ . '/NavigationView.php'; ?>
    </header>
    <main>
        <h1>Ajouter un jeu à sa bibliothèque</h1>

        <?php if (!isset($error) || $error != "Le jeu que vous souhaiter ajouter n'exite pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouté à votre bibliothèque !") : ?>
            <form class="form" action="index.php?action=ajouterJeu" method="post">
                <input type="hidden" name="action" value="rechercher">
                <label for="nom">Nom du jeu</label>
                <input type="text" name="nom" id="nom" value="<?= $_POST['nom'] ?? '' ?>" required>
                <button type="submit">Rechercher</button>
            </form>
        <?php endif; ?>

        <?php if (isset($error)) : ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>

        <?php if (isset($success)) : ?>
            <p class="success"><?= $success ?></p>
        <?php endif; ?>

        <?php if (!empty($jeux)): ?>
            <div class="games-container">
                <?php foreach ($jeux as $jeu): ?>
                    <div class="game">
                        <img src="<?php echo htmlspecialchars($jeu['url_couverture_jeu']); ?>" alt="<?php echo "Nom du jeu"; ?>">

                        <div class="game-info">
                            <p class="game-name"><?php echo $jeu["nom_jeu"]; ?></p>
                            <form class="game-add" action="index.php?action=ajouterJeu" method="post">
                                <input type="hidden" name="action" value="ajouterCompte">
                                <input type="hidden" name="id_jeu" value="<?= $jeu['id_jeu'] ?>">
                                <button type="submit">AJOUTER</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($error) && $error == "Le jeu que vous souhaiter ajouter n'exite pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouté à votre bibliothèque !") : ?>
            <form action="index.php?action=ajouterJeu" method="post">
                <input type="hidden" name="action" value="creer">
                <label for="nom">Nom du jeu</label>
                <input type="text" id="nom" name="nom" required>

                <label for="editeur">Editeur du jeu</label>
                <input type="text" id="editeur" name="editeur" required>

                <label for="date_sortie">Sortie du jeu</label>
                <input type="date" id="date_sortie" name="date_sortie" required>

                <fieldset>
                    <legend>Plateformes</legend>
                    <label for="playstation">
                        <input type="checkbox" id="playstation" name="plateformes[]" value="Playstation">
                        Playstation
                    </label>
                    <label for="xbox">
                        <input type="checkbox" id="xbox" name="plateformes[]" value="Xbox">
                        Xbox
                    </label>
                    <label for="nintendo">
                        <input type="checkbox" id="nintendo" name="plateformes[]" value="Nintendo">
                        Nintendo
                    </label>
                    <label for="pc">
                        <input type="checkbox" id="pc" name="plateformes[]" value="PC">
                        PC
                    </label>
                </fieldset>

                <label for="desc">Description du jeu</label>
                <textarea id="desc" name="desc" required></textarea>

                <label for="url_couverture">URL de la couverture</label>
                <input type="url" id="url_couverture" name="url_couverture">

                <label for="url_site">URL du site</label>
                <input type="url" id="url_site" name="url_site">

                <button type="submit">Ajouter le jeu</button>
            </form>
        <?php endif; ?>
    </main>

    <?php include __DIR__ . '/FooterView.php'; ?>
</body>

</html>