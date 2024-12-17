<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../Css/Register.css">
</head>
<body>
    <div class="form-container">
        <h1>Inscription</h1>
        <form action="index.php?action=registerController" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>

            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>

            <label for="confirmPassword">Confirmation du mot de passe :</label>
            <input type="password" name="confirmPassword" id="confirmPassword" required>

            <button type="submit" name="register">S'inscrire</button>
        </form>
        
        <a href="index.php?action=login">Se connecter</a>
    </div>
</body>
</html>
