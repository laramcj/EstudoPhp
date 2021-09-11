<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new Cpf('123.456.789-10'),
        'Vinicius Dias',
        new \Alura\Banco\Modelo\Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
)
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
