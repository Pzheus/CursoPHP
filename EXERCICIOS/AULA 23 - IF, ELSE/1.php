<?php

$nome = 'joao';
if($nome == "joao"){
    echo "Foi identificado o nome do autor do vídeo.";
}




$idade = 18;
if($idade<=18){
    echo 'Adolescente';
}else{
    echo 'Adulto';
}



$nota = 5;
if($nota  <= 2){
    echo 'Nota Fraca';
}elseif($nota <=4){
    echo 'Nota Insuficiente';
}elseif($nota <=6){
    echo 'Nota Positiva';
}elseif($nota <=8){
    echo 'Nota Muito Positiva';
}else{
    echo 'Nota Excelente';
}


///// alternativa

if($valor == 10):
    //código1
else:
    //código2
endif;