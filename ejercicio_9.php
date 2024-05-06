<?php

$tamano = 7;


for ($fila = 1; $fila <= $tamano; $fila++) {
  
    if ($fila == 1 || $fila == $tamano) {
        echo str_repeat("*", $tamano);
    } else {
       
        echo str_repeat(" ", $tamano - $fila);
        echo "*\n";
    }
}

?>
