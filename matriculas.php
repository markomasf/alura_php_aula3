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

$alunos2022 = array_merge($alunos2021, $novosAlunos);

$alunos2023 = [...$alunos2021, 'Marco Fonseca', ...$novosAlunos];

var_dump($alunos2023);