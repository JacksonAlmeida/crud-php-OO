<?php

require_once 'vendor/autoload.php';

$profDao = new App\ModelDao\ProfessorDao;
$profDao->deleteId(3);

?>