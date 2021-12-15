<?php

require_once 'vendor/autoload.php';

$curso = new \App\Model\Curso;
$cursoDAO = new App\ModelDao\CursoDao;
$profDAO = new App\ModelDao\ProfessorDao;
include __DIR__.'/includes/Header/index.php';
include __DIR__.'/includes/Form/formCurso.php';
if(isset($_POST['nome'], $_POST['id_prof'])){

    $curso->setNome($_POST['nome']);
    $curso->setProfId($_POST['id_prof']);
    $cursoDAO->createCurso($curso);
}

$profDAO->findAll();
include __DIR__.'/includes/Lista/listProfessor.php';
include __DIR__.'/includes/Footer/index.php';

?>