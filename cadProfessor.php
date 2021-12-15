<?php

require_once 'vendor/autoload.php';

$prof = new \App\Model\Professor;
$profDAO = new App\ModelDao\ProfessorDao;

include __DIR__.'/includes/Header/index.php';
include __DIR__.'/includes/Form/formProfessor.php';

if(isset($_POST['nome'], $_POST['dt_nascimento'])){
    $prof->setNome($_POST['nome']);
    $prof->setDtNascimento($_POST['dt_nascimento']);
    $profDAO->createProfessor($prof);
}


include __DIR__.'/includes/Lista/listProfessor.php';
include __DIR__.'/includes/Footer/index.php';

?>