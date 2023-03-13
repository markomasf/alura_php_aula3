<?php

$notas = [
    'Marco' => null,
    'Lorene' => 10,
    'Layane' => 5,
    'Larissa' => 9,
    'Lucineia' => 8,
    'Marcos' => 7,
    'Matheus' => 6,
    'Bruno' => 4
];

//var_dump($notas);

echo "O aluno fez a prova: ";
var_dump(array_key_exists('Marco', $notas));

// isset (Valida se o campo está com NULL)
var_dump(isset($notas['Lorene']));