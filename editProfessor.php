<?php

require_once 'vendor/autoload.php';

include __DIR__ . '/includes/Header/index.php';
include __DIR__ . '/includes/Edit/editProfessor.php';

if (!empty($_GET['id'])) {

    $prof = new \App\Model\Professor;
    $prof->setId($_GET['id']);
    $prof->setNome($_POST['nome']);
    $prof->setDtNascimento($_POST['dt_nascimento']);
    $profDAO = new \App\ModelDAO\ProfessorDao;
    $profDAO->updateProfessor($prof);
    echo "<pre>";
    var_dump($prof);
}

include __DIR__ . '/includes/Footer/index.php';
