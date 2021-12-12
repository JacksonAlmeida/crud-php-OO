<?php

echo "<h2>Lista de Profressores</h2>";

?>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Data de nascimento</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php

                $prof = new \App\Model\Professor;

                foreach ($profDAO->findAll() as $prof) :
                    //echo "id= " . $prof['id_professor'] . "<pre>" . "nome= " . $prof['nome'] . "<pre>" . "data de nascimento= " . $prof['dt_nascimento'] . "<hr>";
                    //var_dump($prof);
                    echo "<tr>";
                    echo "<td>".$prof['id_professor']."</td>";
                    echo "<td>".$prof['nome']."</td>";
                    echo "<td>".$prof['dt_nascimento']."</td>";
                    echo "</tr>";
                endforeach;
                ?>
            </tr>
        </tbody>
    </table>
</div>