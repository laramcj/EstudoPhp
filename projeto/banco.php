<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$primeiraConta = new Conta(new Titular(new Cpf ('123.456.789-10'), 'Vinicius Dias', $endereco));

$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular(new Cpf ('698.549.548-10'), 'Patricia', $endereco));
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
new Conta(new Titular(new Cpf ('123'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
