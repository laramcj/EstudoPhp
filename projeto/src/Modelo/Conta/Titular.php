<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    /**
     * usando o atalho "Alt + Enter" e a opção "Initialize Fields" (ou "Initialize Properties")
     */
    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    /**
     * atalho interessante do PhpStorm é o "Alt + Insert", que nos dá acesso à opção "Getters"
     */


    public function recuperaEndereco() : Endereco
    {
        return $this->endereco;
    }


    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}