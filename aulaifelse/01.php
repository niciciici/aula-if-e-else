<?php 

$nome = $_GET["name"];
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];
$peso1 = $n1 * 1;
$peso3 = $n3 * 2;
$mp = ($peso1 + $peso1 + $peso3)/4;

echo "O aluno $nome está com $mp, estando  ";

 if($mp >= 7){
    echo "APROVADO";
 }else{echo "REPROVADO";}



?>