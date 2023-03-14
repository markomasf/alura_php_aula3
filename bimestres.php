<?php

$notasBimestre1 = [
    'Marco' => 9,
    'Lorene' => 10,
    'Layane' => 5,
    'Larissa' => 3,
    'Lucineia' => 8,
    'Marcos' => 7,
    'Matheus' => 6,
    'Bruno' => 4
];

$notasBimestre2 = [
    'Lorene' => 10,
    'Layane' => 5,
    'Larissa' => 3,
    'Lucineia' => 8,
    'Marcos' => 7,
    'Matheus' => 6,
    'Bruno' => 4
];

$notasBimestre3 = [
    'Marco' => 9,
    'Lorene' => 10,
    'Layane' => 5,
    'Larissa' => 3,
    'Lucineia' => 10,
    'Marcos' => 7,
    'Matheus' => 6,
    'Bruno' => 4
];

//array_diff (verifica os elementos que tem no primeiro array e não nos demais)
var_dump(array_diff($notasBimestre1, $notasBimestre2));

//array_diff (verifica as chaves que tem no primeiro array e não nos demais)
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

//array_diff (verifica as chaves e elementos que tem no primeiro array e não nos demais)
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre3));