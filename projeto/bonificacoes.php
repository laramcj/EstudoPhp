<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{Cpf, Funcionario};


$umFuncionario = new Funcionario(
    'Vinicius Dias',
    new Cpf('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umaFuncionaria = new Funcionario(
    'Patricia',
    new Cpf('987.654.321-10'),
    'Gerente',
    3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();

