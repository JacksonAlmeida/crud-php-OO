<?php

require_once 'vendor/autoload.php';

$prof = new \App\Model\Professor;
$profDAO = new App\ModelDao\ProfessorDao;

include __DIR__ . '/includes/Header/index.php';
include __DIR__ . '/includes/Edit/editProfessor.php';

if (!empty($_GET['id_professor'])) {
    $prof = new App\Model\Professor;
    $profDAO = new App\ModelDao\ProfessorDao;
    $prof->setNome('nome');
    $prof->setDtNascimento('dt_nascimento');
    $profDAO->findById($_GET['id_professor']);
    print_r($profDAO);
}

include __DIR__ . '/includes/Footer/index.php';
