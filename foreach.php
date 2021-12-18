<?php

$ContasCorrentes = [
    '123.456.789-10' => [
        'nome' => 'Vinicius',
        'saldo' => 1000
    ], 
    '123.456.789-11' => [
        'nome' => 'Natalia',
        'saldo' => 5000
    ], 
    '123.456.789-12' => [
        'nome' => 'Deborah',
        'saldo' => 8000
    ]
];

$ContasCorrentes['123.333.339-10'] = [
        'nome' => 'Renata',
        'saldo' => 6500
];

foreach ($ContasCorrentes as $cpf => $conta) {
    echo $conta['nome'] . ", seu saldo é de " . $conta['saldo'] . " e seu CPF é " . $cpf . PHP_EOL;
}