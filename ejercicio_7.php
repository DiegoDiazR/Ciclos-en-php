<?php
$altura = 4;

$contador = 1;

for ($fila = 1; $fila <= $altura; $fila++) {

    for ($espacios = 0; $espacios <= $altura - $fila; $espacios++) {
        echo " ";
    }
    

    for ($numeros = 1; $numeros <= $fila; $numeros++) {
        echo $contador . " ";
        $contador++;
    }
    
    echo "\n";
}
?>
