<?php
echo "Ejercicio 4 <br>";
$creditoDisponible = 5; 
$costoJugada = 1.50; 

while ($creditoDisponible >= 1) {
    echo "Sigue Jugando <br>";
    $creditoDisponible = $creditoDisponible - $costoJugada; // Se resta el costo de la jugada al crédito disponible en cada partida
}
?>
