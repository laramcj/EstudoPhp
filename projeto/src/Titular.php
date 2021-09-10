<?php

class Titular
{
    private Cpf $cpf;
    private String $nome;

    /**
     * usando o atalho "Alt + Enter" e a opção "Initialize Fields" (ou "Initialize Properties")
     */
    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    /**
     * atalho interessante do PhpStorm é o "Alt + Insert", que nos dá acesso à opção "Getters"
     */
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }



}