<?php

include_once __DIR__ . '/../Classes/Data.php';
include_once __DIR__ . '/../Classes/DataConstructor.php';

if (!isset($_SESSION['id_compte'])) {
    header("Location: index.php?action=login");
    exit();
}

// $host = 'localhost';
// $dbname = 'gamecollection';
// $username ='root';
// $password = '';

// $data = new Data($host, $dbname, $username, $password);

$model = new ClassementModel($data);

$classement = $model->get_classement();

include __DIR__ . '/../Views/ClassementView.php';
?>
