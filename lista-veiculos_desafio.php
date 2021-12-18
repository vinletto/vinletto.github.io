<?php


$veiculosList = [
    'FLS-1376' => [
        'marca' => 'Renault',
        'modelo' => 'Clio',
    ],
    'FCK-2437' => [
        'marca' => 'Fiat',
        'modelo' => 'Toro',
    ],
    'FTW-3972' => [
        'marca' => 'Volkswagen',
        'modelo' => 'Golf',
    ]
];


echo PHP_EOL."Os veículos apreendidos no pátio são:".PHP_EOL.PHP_EOL;

foreach ($veiculosList as $placa => $veiculo) {
    echo "Marca: ".$veiculo['marca'].PHP_EOL."Modelo: ".$veiculo['modelo'].PHP_EOL."Placa: ".$placa.PHP_EOL.PHP_EOL;
}
