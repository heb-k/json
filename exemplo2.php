<?php

    
//string json (array contendo 3 elemnetos)
$json_str = '{"empregados": '. 
    '[{"nome" : "Rosé", "idade":24, "sexo" : "F"},'.
    '{nome": "Jisoo", "idade":26, "sexo":"F"},'.
    '{nome": "Jennie", "idade":25, "sexo":"F"},'.
    ']}';

    
$jsonObj = json_decode($json_str); 
$empregados = $jsonObj->empregados;

//navega pelos elementos do array, imprimindo cada empregado
foreach($empregados as $e)
{
     echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br>";
}


?>