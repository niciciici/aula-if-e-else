<?php 

$idade = $_GET["idade"];
$trab = $_GET["trab"];

if(($idade > 60) || ($trab > 30) || ($idade > 60 && $trab > 25)){
    echo "O senhor pode se aposentar";}
    else{echo "Você ainda não pode se aposentar";}
 



?>