<?php
$numero = readline("Ingrese un número para calcular su factorial: ");


if ($numero <= 0) {
    echo "El factorial es 1";
} else {
    $factorial = 1;
    
    for ($contador = 1; $contador <= $numero; $contador++) {
        $factorial *= $contador;
    }
    
    echo "El factorial de $numero es: $factorial";
}
?>
