<?php
 
function falar(){
    return;
    echo "Não vai ser aprensentado este texto";
}

function adicionar ($a, $b){
    $resultado = $a + $b;
    return $resultado;

    return $a + $b;
}

echo adicionar(10,20);


$nome = "joão";
if(avaliar_nome($nome)){
    echo "O cliente está correto";
}

function avaliar_nome($n){
    if($n == "joão"){
        return true;
    } else {
        return false;
    }
}

function teste(){

}

if (falar() === null){
    echo "Função com retorno igual a nulo";
}