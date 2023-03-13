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

var_dump($alunos2022);