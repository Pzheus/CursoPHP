<?php

for($i = 0; $i < 20; $i++){
    echo $i.'<br>';


    if($i==10){
        break; //para imediatamente o loop
    }
}

echo '<hr>';

$nomes = ['joao','ana','carlos'];
foreach($nomes as $nome){
    echo $nome.'<br>';
    if($nome == 'ana'){
        break; //para imediatamente o loop
    }
}

echo '<hr>';


for($i = 0; $i < 20; $i++){
    echo $i.'<br>';


    if($i==10){
        continue; //não lê mais a parte seguinta até o próximo loop
    }
}

$nomes = ['joao','ana','carlos'];
foreach($nomes as $nome){
    echo $nome.'<br>';
    if($nome == 'ana'){
        continue; //não lê mais a parte seguinta até o próximo loop
    }
}


for($i = 0; $i < 20; $i++){

    if($i==10){
        goto teste; // vai direto para a label definida
    }
    echo $i.'<br>';
    }   
    echo 'fim do loop';

    teste:
    echo 'AQUI';
