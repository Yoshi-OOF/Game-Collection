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
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Se connecter</button>
        </form>
        
        <div style="text-align: center; margin-top: 10px;">
            <a href="Register.php" style="color: #6a5acd; text-decoration: none;">S'inscrire</a>
        </div>
    </div>
</body>
</html>
