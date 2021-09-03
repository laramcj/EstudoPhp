<?php

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular =  $nomeTitular;
        $this->saldo = 0;
    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }
    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }
}

//No Terminal:
//require 'src/Conta.php';
//$primeiraConta = new Conta();
//$primeiraConta->saldo = 200;
//$primeiraConta->cpfTitular = '123.456.789-10';
//$primeiraConta->nomeTitular = 'Vinicius Dias';
//var_dump($primeiraConta); // Verifique que o objeto já possui os dados necessários de uma conta criada
//$segundaConta = new Conta();
//$segundaConta->cpfTitular = '987.654.321-10';
//$segundaConta->nomeTitular = 'Patricia';
//$segundaConta->saldo = 1500;
//var_dump($primeiraConta); // Verifique que o objeto não teve seus valores alterados
//var_dump($segundaConta); // Note que este objeto possui os valores da segunda conta criada

//$a = 4;
//$b = $a;
//$b++;
//echo $b;
//echo $a;

//$c = $segundaConta;
//$c->saldo = 2000;
//var_dump($segundaConta);