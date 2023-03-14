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

// array_key_exists (verificar seachave existe)
echo "O aluno fez a prova: ";
var_dump(array_key_exists('Marco', $notas));

// isset (Valida se a chave existe e se o campo está com NULL)
echo "A lorene fez prova: ";
var_dump(isset($notas['Lorene']));

// in_array (saber se existe determinado valor dentro do array)
echo "Alguém tirou nota 10: ";
var_dump(in_array(10, $notas));

// array_search (Verifica se tem o valor e retorna a chave)
echo "Quem tirou 7? ";
var_dump(array_search(7, $notas));