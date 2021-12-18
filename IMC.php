<?php

// IMC = PESO / ALTURA * ALTURA

$peso = 20;
$altura = 1.70;
$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo  PHP_EOL . "Seu IMC é $imc e está abaixo do indicado." . PHP_EOL;
} else if ($imc > 18.5 && $imc < 24.9) {
        echo PHP_EOL . "Seu IMC é $imc e está dentro do padrão indicado." . PHP_EOL;
} else {
    echo PHP_EOL . "Seu IMC é $imc e está acima do indicado." . PHP_EOL;
}