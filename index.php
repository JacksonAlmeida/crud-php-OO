<?php

require_once 'vendor/autoload.php';

$prof = new \App\Model\Professor;
$profDAO = new App\ModelDao\ProfessorDao;

foreach($profDAO->findAll() as $prof):
    echo "id= ".$prof['id_professor']."<pre>"."nome= ".$prof['nome']."<pre>"."data de nascimento= ".$prof['dt_nascimento']."<hr>";
endforeach;

?>