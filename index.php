<?php

require_once 'vendor/autoload.php';

$prof = new App\Model\Professor;
$prof->setNome('Cristina Marques');
$prof->setDtNascimento('1971-10-25');

$profDao = new App\ModelDao\ProfessorDao();
$profDao->createProfessor($prof);

?>