<?php
 
$a = function(){
    echo "<p>Olá!</p>";
};

$a();



$falar = function($mensagem){
    echo "<p>Eu digo: $mensagem</p>";
};

$falar ('Estou aqui');


$andar = function($metros){
    return "Andei $metros metros";
};

echo $andar(100);

$a = function(){
    return "Funcão A";
};

function falar($x){
    echo $x;
}

falar ($a());