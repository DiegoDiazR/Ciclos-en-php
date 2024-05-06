<?php
$tamano = 5;


for ($nivel = 1; $nivel <= $tamano; $nivel++) {
    for ($asteriscos = 1; $asteriscos <= $nivel; $asteriscos++) {
        echo "*";
    }
    echo "\n";
}


for ($nivel = $tamano - 1; $nivel >= 1; $nivel--) {
    for ($asteriscos = 1; $asteriscos <= $nivel; $asteriscos++) {
        echo "*";
    }
    echo "\n";
}
?>
