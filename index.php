<?php 

// String Json contendo os dados de um funcionário
$json_str = '{"nome": "Rosé", "idade": 25, "sexo":"F"}';


//fazer o parsing na string, gerando um objeto PHP
//encode - converter em JSON
//decode - converter para PHP
$obj = json_decode($json_str);

//exibir o conteudo do objeto
echo "nome: $obj->nome<br>";
echo "idade: $obj->idade<br>";
echo "sexo: $obj->sexo<br>";

?>