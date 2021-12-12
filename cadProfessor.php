<?php

require_once 'vendor/autoload.php';

$prof = new \App\Model\Professor;
//$prof->setId(8);
//$prof->setNome("Black da Silva Jr");
//$prof->setDtNascimento('2021-12-11');
$profDAO = new App\ModelDao\ProfessorDao;
//$profDAO->updateProfessor($prof);

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