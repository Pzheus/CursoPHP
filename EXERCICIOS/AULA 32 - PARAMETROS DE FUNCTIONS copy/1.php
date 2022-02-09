<?php

$a = 0;
$b = 0;

$nomes = ['joão','ana','carlos'];
$n = ['joão','ana','carlos'];
$s = ['joão','ana','carlos'];

function adicao($a,$b){

}

adicionar(10,20);
adicionar(100,200);

function adicionar ($a, $b){
    echo "$a + $b =" . $a + $b;
    echo "$a + $b =" . ($a+$b);
}

function saudacao($valor){
echo "Bom dia, $valor.<br>";
}

echo '<hr>';

foreach($nomes as $nome){
    saudacao($nome);
}