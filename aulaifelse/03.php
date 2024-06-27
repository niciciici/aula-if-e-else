<?php 

$salario = $_GET["salario"];
$serv = $_GET["serv"];

if($salario <= 500 && $serv < 1)
{$calc = $salario + ($salario * 0.25);
echo "Seu salário foi reajustado a: $calc";}

else if(($salario <= 1000 && $salario > 500) && ($serv >= 1 && $serv <=3))
{$calc2 = $salario  + ($salario * 0.20);
echo "Seu salário foi reajustado a: $calc2";
}

else if($salario <= 1500 && $salario > 1000)
{$calc3 =   $salario  + ($salario * 0.15);
echo "Seu salário foi reajustado a: $calc3";}

else if($salario <= 2000 && $salario > 1500)
{$calc4 = $salario + ($salario * 0.10);
echo "Seu sálario foi reajustado a: $calc4";}

else if ($salario > 2000 )
{echo "Não terá reajuste";}

?>