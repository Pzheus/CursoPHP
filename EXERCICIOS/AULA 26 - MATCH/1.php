<?php

$x = 15;
echo match($x) {
    5 => "parou no 5",
    10 => "parou no 10",
    15 => "parou no 15",
    default => "é um número diferente de 5, 10 ou 15"
};



$x = 10;
$opcao = match($x){
    2 => "é 2",
    4,5,6 => "é 4,5 ou 6",
    default => "é outro valor"
};