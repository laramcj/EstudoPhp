<?php

$inicio = new DateTime('2022-11-21');
$intervalo = new DateInterval('P4Y');
$periodo = new DatePeriod($inicio, $intervalo, 5);

foreach ($periodo as $data) {
    echo $data->format('d/m/Y') . PHP_EOL;
}
