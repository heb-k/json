<?php

$empregados = array('empregados' => array(
    array(
        'nome' => 'Rosé',
        'idade' => 24,
        'sexo' => 'F'
    ),
    array(
        'nome' => 'Jisoo',
        'idade' => 26,
        'sexo' => 'F'
    ),
    array(
        'nome' => 'Jennie',
        'idade' => 25,
        'sexo' => 'F'
    )
));

$json_str = json_encode($empregados);

echo "$json_str";


?>