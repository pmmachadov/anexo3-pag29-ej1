<?php
function mostrarMatriz($matriz) // Fatal error: Cannot redeclare mostrarMatriz(). The solution is

{
    echo "<table border='1'>";
    foreach ($matriz as $posicion => $valor) {
        echo "<tr><td>$posicion</td><td>$valor</td></tr>";
    }
    echo "</table>";
}
$matriz = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

?>