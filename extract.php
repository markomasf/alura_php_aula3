<?php

$dados = [
    'nome' => 'Marco',
    'nota' => 10,
    'idade' => 24
];

extract($dados);
var_dump($nome, $nota, $idade);