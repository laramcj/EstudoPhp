<?php

namespace Alura\Banco\Modelo\Conta;


abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }



    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }
    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }



    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;

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