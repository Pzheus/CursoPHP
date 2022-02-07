<?php


$opcao = 0;

$nome = $opcao == 1 ? 'Joao' : 'Antonio';

$opcao ==1 ? $nome = "Joao" : $nome = "Antonio";

echo $opcao == 1 ? 'Sim' : 'Não';

?>




<?php if($opcao ==1): ?>
<h2>SIM</h2>
<?php else:?>
<h2>NÃO</h2>
<?php endif; ?>





<h2><?= $opcao ==1 ? 'SIM' : 'NÃO' ?></h2>




<h2 style="color: <?= $opcao == 1 ? 'red' : 'blue' ?>""> Este texto tem cor definida pelo PHP </h2>


