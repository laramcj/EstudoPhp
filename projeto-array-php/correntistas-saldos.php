<?php

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
  ];
  
  $saldos = [
     2500,
     3000,
     4400,
     1000,
     8700,
     9000
  ];
  
//   $relacionados = array_merge ($correntistas, $saldos);

$relacionados = array_combine($correntistas, $saldos);

// echo $relacionados ["Giovanni"] ;

// $relacionados["Matheus"] = 4500;

//  echo "O saldo do Giovanni é: {$relacionados["Giovanni"]}";

if (array_key_exists ("João", $relacionados)) {
    echo "O saldo do João é: {$relacionados["João"]}";
 } else {
    echo "Não foi encontrado";
  
//   echo "<pre>";
//   var_dump ($relacionados);
//   echo "</pre>";

// $array_associativo = [
//     "Giovanni" => 2500,
//     "João" => 3000,
//     "maria" => 4400];