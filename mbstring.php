<?php

$string = 'Testes de integração com PHP';

echo mb_strlen($string) . PHP_EOL;
echo mb_strtoupper($string) . PHP_EOL;
echo mb_strtolower($string) . PHP_EOL;

$convertida = mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8');
echo $convertida . PHP_EOL;

 echo mb_convert_case($string, MB_CASE_TITLE) . PHP_EOL;