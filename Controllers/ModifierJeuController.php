<?php

include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Classes/DataConstructor.php';

if (!isset($_SESSION['compte'])) {
    header("Location: index.php?action=login");
    exit();
}

$model = new ModifierJeuModel($pdo);

include __DIR__ . '/../Views/ModifierJeuView.php';
?>