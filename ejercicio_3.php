<?php

$suma_total=0;
$suma=0;
for ($num=1; $num <=10 ; $num++) { 
	$suma_total +=$num / 10;
	$suma +=$num;
	
}
echo "la suma es" .$suma . "\n";
echo "el promedio es" . $suma_total;
?>