<?php
session_start();

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Game Collection</title>
    <link rel="stylesheet" href="Css/Profile.css">
</head>
<body>
    <header>
        <?php include __DIR__ . '/NavigationView.php'; ?>
    </header>

    <main>
        <div class="profile-container">
            <h1>Mon profil</h1>
            <p><strong>Nom :</strong> MARCEL</p>
            <p><strong>Prénom :</strong> Guillaume</p>
            <p><strong>Email :</strong> gmarcel@f4p2.fr</p>
            <div class="profile-actions">
                <button onclick="location.href='EditProfileView.php'">Modifier mon profil</button>
                <button onclick="confirmDeletion()">Supprimer mon compte</button>
                <button onclick="location.href='Logout.php'">Se déconnecter</button>
            </div>
        </div>
    </main>

    <footer>
        <p>Game Collection - 2025 - Tous droits réservés</p>
    </footer>

    <script>
        function confirmDeletion() {
            if (confirm("Êtes-vous sûr de vouloir supprimer votre compte ?")) {
                location.href = 'DeleteAccount.php';
            }
        }
    </script>
</body>
</html>
