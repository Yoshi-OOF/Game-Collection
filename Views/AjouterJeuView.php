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
        <form action="index.php?action=ajouterJeu" method="post">
            <input type="hidden" name="action" value="rechercher">
            <label for="nom">Nom du jeu</label>
            <input type="text" name="nom" id="nom" value="<?= $_POST['nom'] ?? '' ?>" required>
            <button type="submit">Rechercher</button>
        </form>
        <?php if (isset($error)) : ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>

        <?php if (isset($success)) : ?>
            <p class="success"><?= $success ?></p>
        <?php endif; ?>

        <?php if (!empty($jeux)) : ?>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Editeur</th>
                        <th>Site</th>
                        <th>Couverture</th>
                        <th>Date de sortie</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jeux as $jeu) : ?>
                        <tr>
                            <td><?= $jeu['nom_jeu'] ?></td>
                            <td><?= $jeu['desc_jeu'] ?></td>
                            <td><?= $jeu['editeur_jeu'] ?></td>
                            <td><?= $jeu['url_site_jeu'] ?></td>
                            <td><?= $jeu['url_couverture_jeu'] ?></td>
                            <td><?= $jeu['date_sortie_jeu'] ?></td>
                            <td>
                                <form action="index.php?action=ajouterJeu" method="post">
                                    <input type="hidden" name="action" value="ajouterCompte">
                                    <input type="hidden" name="id_jeu" value="<?= $jeu['id_jeu'] ?>">
                                    <button type="submit">Ajouter à ma bibliothèque</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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