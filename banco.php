<?php

function sacar(array $conta, float $saque): array
{
        if ($saque > $conta['saldo']) {
            exibeMensagem("Você não tem saldo suficiente.");
        } else {
            exibeMensagem("Saque liberado, seu saldo agora é " . $conta['saldo'] -= $saque);
            }
    return $conta;
}

function exibeMensagem($mensagem) 
{
    echo PHP_EOL . $mensagem . PHP_EOL;
}

function depositar(array $conta, float $deposito): array
{
    if ($deposito > 0) {    
        echo exibeMensagem("Deposito realizado com sucesso, seu saldo agora é " . $conta['saldo'] += $deposito);
    } else {
        echo exibeMensagem("Operação inválida.");
    }
    return $conta;
}


$ContasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '123.456.789-11' => [
        'titular' => 'Natalia',
        'saldo' => 5000
    ], 
    '123.456.789-12' => [
        'titular' => 'Deborah',
        'saldo' => 8000
    ]
];

//saque
$ContasCorrentes['123.456.789-10'] = sacar($ContasCorrentes['123.456.789-10'], 500);

//deposito
$ContasCorrentes['123.456.789-11'] = depositar($ContasCorrentes['123.456.789-11'], 200);

foreach ($ContasCorrentes as $cpf => $conta) {
    exibeMensagem($conta['titular'] . ", seu saldo é de " . $conta['saldo'] . " e seu CPF é " . $cpf);
}