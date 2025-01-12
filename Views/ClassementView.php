<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Classement.css">
    <title>Classement des temps passés</title>
</head>

<body>
    <header class="header">
        <?php include __DIR__ . '/NavigationView.php'; ?>
    </header>

    <div class="container">
        <h1>Classement des temps passés</h1>
        <table>
            <thead>
                <tr>
                    <th>Joueur</th>
                    <th>Temps passé</th>
                    <th>Jeu favori</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                foreach ($classement as $row) {
                    if ($count >= 10 || $count == count($classement) - 1) {
                        break;
                    }
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['prenom_compte']) . "</td>";
                    if (isset($row['temps_jeu'])) {
                        echo "<td>" . htmlspecialchars($row['temps_jeu']) . "</td>";
                    } else {
                        echo "<td>Non disponible</td>";
                    }
                    echo "<td>" . htmlspecialchars($row['nom_jeu']) . "</td>";
                    echo "</tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php include __DIR__ . '/FooterView.php'; ?>

</body>

</html>