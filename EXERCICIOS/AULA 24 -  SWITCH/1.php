<?php

$nome = 'joao';
switch($nome){

    case 'joao':
        echo '1';
        break;
    case 'ana':
        echo '2';
        break;
    default:
    echo "outra coisa qualquer";
        break;

}

?>

<?php if(true): ?>

    <p>Execeutar código aqui</p>

<?php else: ?>

    <h1>Execeutar Aqui</h1>

<?php endif; ?> 
