<?php

$sueldo = 800;

echo "Ejercicio 1 <br>";

if ($sueldo >= 1 && $sueldo <= 450) {
    $descuento = $sueldo * 0.08;
    $totalPagar = $sueldo - $descuento;
    echo "Su sueldo es: $$sueldo. <br>" .
         "Descuento aplicado: $$descuento <br>" .
         "Total a recibir: $$totalPagar";
} else if ($sueldo <= 600) {
    $descuento = $sueldo * 0.15;
    $totalPagar = $sueldo - $descuento;
    echo "Su sueldo es: $$sueldo. <br>" .
         "Descuento aplicado: $$descuento <br>" .
         "Total a recibir: $$totalPagar";
} else if ($sueldo <= 800) {
    $descuento = $sueldo * 0.18;
    $totalPagar = $sueldo - $descuento;
    echo "Su sueldo es: $$sueldo. <br>" .
         "Descuento aplicado: $$descuento <br>" .
         "Total a recibir: $$totalPagar";
} else if ($sueldo > 800) {
    $descuento = $sueldo * 0.20;
    $totalPagar = $sueldo - $descuento;
    echo "Su sueldo es: $$sueldo. <br>" .
         "Descuento aplicado: $$descuento <br>" .
         "Total a recibir: $$totalPagar";
}

?>
