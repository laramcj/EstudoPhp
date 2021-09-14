<?php declare(strict_types=1);

namespace Alura;

spl_autoload_register(
    function (string $namespaceClasse): void{
        $caminho = "/src";
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);

$correntistas_e_compras = [
    "Giovanni",
    12,
    "Maria",
    25,
    "Luis",
    "Luísa",
    "12"
];

echo "<pre>";

var_dump($correntistas_e_compras);

ArrayUtils::remover("Giovanni", $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo "</pre>";
