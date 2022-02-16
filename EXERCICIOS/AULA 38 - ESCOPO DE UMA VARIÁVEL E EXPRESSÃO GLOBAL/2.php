<?php
 

 $a = 10;

 function funcao(){

    //global $a;  //Variavel global no escopo da function
    $a = 20;
 }

 funcao();

 echo "<p>$a</p>";



////////////////////////////////////




 $b = 100;

 function funcao2(){

     $GLOBALS['b']=200;

 }

 funcao2();

 echo"<p>$b</p>";