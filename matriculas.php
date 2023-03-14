<?php

$alunos2021 = [
    'Marco',
    'Lorene',
    'Layane',
    'Larissa',
    'Lucineia',
];

$novosAlunos = [
    'Marcos',
    'Matheus',
    'Bruno'
];

// array_merge faz as junção entre os array
$alunos2022 = array_merge($alunos2021, $novosAlunos);

//nessa sintaxe "..." é possível colocar informaçções entre os valores.
$alunos2023 = [...$alunos2021, 'Marco Fonseca', ...$novosAlunos];

//para adicionar novos elementos ao array
array_push($alunos2023, 'Joao', 'José', 'Maria');

//outra forma de adicionar elementos
$alunos2023[] = 'Carlos';

//para adicionar os elementos no começo da array
array_unshift($alunos2023, 'Mario', 'Rafael');

var_dump($alunos2023);