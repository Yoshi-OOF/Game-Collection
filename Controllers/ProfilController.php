<?php

include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Classes/DataConstructor.php';

if (!isset($_SESSION['id_compte'])) {
    header("Location: index.php?action=login");
    exit();
}

$model = ProfileModel($pdo);

?>