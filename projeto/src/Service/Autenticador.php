<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
       if ($autenticavel->podeAutenticar()){
           echo "Ok. Usuário logado no sistema";
       } else {
           echo "ops. Senha incorreta";
       }

    }
}