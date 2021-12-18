<?php

$idade = 18;
$NumeroDePessoas = 1;

echo PHP_EOL . PHP_EOL;

echo "- Olá, seja bem vindo! Você só pode entrar se for maior de idade ou, se tiver 16 anos, acompanhado de alguém. Qual a sua idade?" . PHP_EOL . PHP_EOL . PHP_EOL;

echo "- Oi, eu tenho $idade." . PHP_EOL . PHP_EOL . PHP_EOL;

    if ($idade >= 18) {
        echo "- Você tem $idade anos. Pode entrar." . PHP_EOL . PHP_EOL;
    } else {
        if ($idade >= 16 && $NumeroDePessoas > 1) {
            echo "- Vocé é menor de idade mas está acompanhado, pode entrar." . PHP_EOL . PHP_EOL;
        } else if ($idade >= 16 && $NumeroDePessoas <= 1) {
                echo "Você não pode entrar sozinho, com apenas $idade." . PHP_EOL . PHP_EOL;
            } else if ($idade < 16 && $NumeroDePessoas > 1) {
                    echo "Você não pode entrar com apenas $idade, mesmo acompanhado.";
        } else {
                    echo "Você está sozinho e é menor de idade, então não poderá entrar. Desculpe!";
        }
    }
