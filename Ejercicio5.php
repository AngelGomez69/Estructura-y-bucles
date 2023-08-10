<?php
$puntos = rand(1, 1000);
$premio = null;

echo "<h1>Ejercicio 4</h1>";
if ($puntos <= 500) {
    if ($puntos == 100){
        $premio = 40;
        echo "Puntaje: $puntos - Premio: $$premio";
    } else if ($puntos == 200){
        $premio = 60;
        echo "Puntaje: $puntos - Premio: $$premio";
    } else if ($puntos == 400){
        $premio = 80;
        echo "Puntaje: $puntos - Premio: $$premio";
    } else if ($puntos == 500){
        $premio = 100;
        echo "Puntaje: $puntos - Premio: $$premio";
    } else{
        echo "No ganó ningún premio";
    }
} else{
    echo "Puntaje no válido";
}
?>
