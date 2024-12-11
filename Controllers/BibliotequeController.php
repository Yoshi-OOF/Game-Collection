<?php
require_once '../Models/BibliotequeModel.php';

$model = new BibliotequeModel();
$jeux = $model->get_jeux();
include '../Views/BibliotequeView.php';

?>