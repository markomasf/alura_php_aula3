<?php

$dados = [
    'Nome' => 'Marco', 
    'Nota' => 10, 
    'Idade' => 24];

foreach($dados as $aluno){
    ['Nome'=> $nome, 'Nota' => $nota, 'Idade' => $idade] = $dados;
    echo "O aluno $nome, tirou a nota $nota e tem $idade anos de idade" . PHP_EOL;
}