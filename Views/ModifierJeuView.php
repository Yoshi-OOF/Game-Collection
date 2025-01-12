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

        <img src="<?php echo $jeu['url_couverture_jeu']; ?>" alt="IMG DU JEU">

        <p><?php echo $jeu['nom_jeu']; ?></p>
        <p><?php echo $jeu['desc_jeu']; ?></p>


        <?php if (isset($jeu['temps_jeu'])): ?>
            <p>Temps passé : <?php echo $jeu['temps_jeu']; ?>h</p>
        <?php endif; ?>

        <form action="index.php?action=modifierJeu&id_jeu=<?php echo $jeu['id_jeu']; ?>" method="POST">

            <label for="temps">Temps passé sur le jeu (en heures) :</label>
            <input type="number" name="temps" id="temps" min="0" value="<?php echo $jeu['temps_jeu']; ?>">

            <button type="submit">Ajouter</button>
        </form>

        <form action="index.php?action=modifierJeu&id_jeu=<?php echo $jeu['id_jeu']; ?>" method="POST">
            <button type="submit">Supprimer</button>
        </form>
    </main>
    

    <?php include __DIR__ . '/FooterView.php'; ?>

</body>

</html>