<?php

$notas = [
    [
        'aluno' => 'Marco',
        'nota' => 9,
    ],
    [
        'aluno' => 'Lorene',
        'nota' => 10,
    ],
    [
        'aluno' => 'Larissa',
        'nota' => 7,
    ],
    [
        'aluno' => 'Neia',
        'nota' => 8,
    ],

];

usort($notas, 'OrdenarDecrescente');

function OrdenarDecrescente($nota1, $nota2){
    if($nota1['nota'] > $nota2['nota']){
        return -1;
    }
    if($nota2['nota'] > $nota1['nota']){
        return 1;
    }
    return 0;
}

//var_dump($notas);

var_dump(array_key_exists('4', $notas));