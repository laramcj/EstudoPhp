<?php

/**
 * @throws Exception
 */
function funcaoQueLancaExcecao()
{}

/**
 * @throws Exception
 */
function outraFuncao()
{
    funcaoQueLancaExcecao();
}


try {
    funcaoQueLancaExcecao();
} catch (Exception $e) {
}

