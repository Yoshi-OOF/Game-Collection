<?php

include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Classes/DataConstructor.php';

if (!isset($_SESSION['compte'])) {
    header("Location: index.php?action=login");
    exit();
}

// $host = 'localhost';
// $dbname = 'gamecollection';
// $username ='root';
// $password = '';

// $data = new Data($host, $dbname, $username, $password);

$model = new ClassementModel($pdo);

$classement = $model->get_classement();

include __DIR__ . '/../Views/ClassementView.php';
?>
