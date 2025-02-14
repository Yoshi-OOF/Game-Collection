<?php
$username = $_SESSION['compte']['prenom_compte']
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Game Collection</title>
    <link rel="stylesheet" href="Css/Profil.css">
</head>

<body>
    <header>
        <?php include __DIR__ . '/NavigationView.php'; ?>
    </header>

    <div class="container">
        <h1>Mon profil</h1>
        <form action="index.php?action=modifierProfil" method="post">
            <?php if (isset($success)): ?>
                <p class="success"><?php echo htmlspecialchars($success); ?></p>
            <?php endif; ?>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($infos_compte['nom_compte']); ?>">

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo htmlspecialchars($infos_compte['prenom_compte']); ?>">

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($infos_compte['email_compte']); ?>" >

            <?php if (isset($error)): ?>
                <p class="error"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password">

            <label for="confirm-password">Confirmation du mot de passe :</label>
            <input type="password" id="confirm-password" name="confirm-password">

            <button type="submit" name="action" value="modify" class="btn btn-modify">MODIFIER</button>
            <button type="submit" name="action" value="delete" class="btn btn-delete">SUPPRIMER MON COMPTE</button>
            <button type="submit" name="action" value="logout" class="btn btn-logout">SE DÉCONNECTER</button>
        </form>
    </div>
    
    <?php include __DIR__ . '/FooterView.php'; ?>

</body>

</html>