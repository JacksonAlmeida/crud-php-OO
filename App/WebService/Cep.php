<?php

namespace App\WebService;

class Cep{

    public static function consultarCep($cep){
        
        $curl = curl_init();

        curl_setopt_array($curl,[
            CURLOPT_URL => 'viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        $response = curl_exec($curl);

        curl_close($curl);

        var_dump($response);
    }

}

?>