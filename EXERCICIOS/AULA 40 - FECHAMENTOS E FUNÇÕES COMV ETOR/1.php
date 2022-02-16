<?php
 
$x = 20;
$y = 30;

$minhaClosure = function($z) use($x,$y){
    echo "$z - $x - $y";
    $y += 1000;
};

$minhaClosure(10);

echo "<p>$y</p>";




$minhaFuncao = fn($z) => "$x - $y - $z"; //obrigatório uso do "fn

echo $minhaFuncao(10);