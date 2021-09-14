<?php

class Calculadora
{
    public function calculaMedia(array $notas)
    {
        $quantidadeNotas = sizeof($notas);

        $soma = 0;
        for ($i = 0; $i < $quantidadeNotas; $i++) {
            $soma = $soma + $notas[$i];
        }

        $media = $soma / $quantidadeNotas;

        echo "A média é: $media";
    }
}
