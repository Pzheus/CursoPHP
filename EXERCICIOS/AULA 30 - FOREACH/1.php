<?php

$nomes = ["joao", "ana", "carlos"];
foreach($nomes as $nome){
    echo $nome."<br>";
}

echo "<hr>";

$capitais = [
    'Portugal' => 'Lisboa',
    'Brasil' => 'Brasília',
    'Espanha' => 'Madrid'
];
foreach($capitais as $key => $value){   
    
    //$key e utilizada com o indice e $value e utilizada como o valor dentro do indice ou seja a string
    echo "Para o pais $key, a capital é $value <br>"; 
}