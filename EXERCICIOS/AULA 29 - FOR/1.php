<?php

for($x = 1;$x < 10; $x++){
    echo $x."<br>";
}

echo '<hr>';

for($x = 1;$x < 10; $x++)
    echo $x."<br>";

echo '<hr>';

$x = 1;
for(;$x <10;){
    echo $x++."<br>";
}

echo '<hr>';

for ($contador = 1, $x = 10 ; $contador<10;$contador++, $x--){
    echo $x.'<br>';
}

echo '<hr>';

$nomes = ['joao','ana','carlos'];
for($i=0; $i < count($nomes);$i++){
    echo $nomes[$i].'<br>';
}