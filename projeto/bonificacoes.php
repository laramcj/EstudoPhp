<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};


$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new Cpf('123.456.789-10'),
    'Desenvolvedor',
    1000
);
$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new Cpf('987.654.321-10'),
    'Gerente',
    3000
);

$umDiretor = new \Alura\Banco\Modelo\Funcionario\Diretor(
    'Ana Paula',
    new Cpf('123.654.987-10'),
    'Diretora',
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotal();

