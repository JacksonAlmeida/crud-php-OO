<?php

use App\WebService\Cep;

require_once 'vendor/autoload.php';

include __DIR__ . '/includes/Header/index.php';

$cep = 69099120;
$endereco = new \App\WebService\Cep;
$endereco::consultarCep($cep);
print_r($endereco);

include __DIR__ . '/includes/Footer/index.php';

?>