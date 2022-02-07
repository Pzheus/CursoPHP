<?php

$dados = [ 
    0 => 10,
    "nome" => 'António',
    "apelido" => "Silva",
    10 => 10000,
    11 => 'Rua Lisboaa',
    12 => 'Brazuca'

];

echo $dados[0];
echo "<br>";

echo $dados ["apelido"];
echo "<br>";

$dados2 = [0 => [0 => [0 => ["PZHEUS"],5,6],5,5]];

echo $dados2 [0][0][0][0];