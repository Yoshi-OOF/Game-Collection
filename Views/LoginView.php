<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Game Collection</title>
    <link rel="stylesheet" href="../Css/Login.css">
</head>
<body>
    <div class="login-container">
        <h1>Se connecter à Game Collection</h1>

        <!-- Section des messages d'erreur -->
        <?php if (!empty($error)): ?>
            <div class="error" style="color: red; font-weight: bold; white-space: pre-wrap;">
                <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="index.php?action=login">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
            
        <a href="index.php?action=register">S'inscrire</a>
    </div>
</body>
</html>
