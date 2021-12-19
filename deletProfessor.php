<?php

require_once 'vendor/autoload.php';

include __DIR__ . '/includes/Header/index.php';

echo "<br>";

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $profDAO = new App\ModelDAO\ProfessorDao;
    $profDAO->deleteId($id);
    echo "<pre>";
    echo "Registro de número $id exluido com sucesso";
    echo "</pre>";
} else {
    echo "registro inválido";
}
?>

<hr>
<br>
<a class="btn btn-primary" href="/composer/cadProfessor.php">Voltar</a>
<br>
<hr>

<?php

include __DIR__.'/includes/Lista/listProfessor.php';
include __DIR__ . '/includes/Footer/index.php';

?>