<?php

$numero = (int) readline("Ingrese un numero ");

for ($num_mul = 1; $num_mul <= 10; $num_mul++) {
    echo "$numero x $num_mul = " . ($numero * $num_mul) . "\n";
}
?>