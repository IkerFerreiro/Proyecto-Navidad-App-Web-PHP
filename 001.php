<?php
//----------------------------------------------------------------EJERCICIO 1-----------------------------------------------------------------
$estudiantes = [
    "Ana" => [8, 7, 9],
    "Luis" => [5, 6, 4],
    "María" => [10, 9, 10],
    "Carlos" => [6, 6, 6]
];

function calcularPromedio($notas) {
    return array_sum($notas) / count($notas);
}

$aprobados = 0;
$suspensos = 0;
$mejorPromedio = 0;
$mejorEstudiante = "";

foreach ($estudiantes as $nombre => $notas) {
    $promedio = calcularPromedio($notas);
    echo "Nombre: $nombre<br>";
    echo "Promedio: $promedio<br>";
    if ($promedio >= 5) {
        echo "Aprobado<br><br>";
        $aprobados++;
    } else {
        echo "Suspenso<br><br>";
        $suspensos++;
    }
    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }
}
echo "<hr>";
echo "Total aprobados: $aprobados<br>";
echo "Total suspensos: $suspensos<br>";
echo "Estudiante con mejor promedio: $mejorEstudiante ($mejorPromedio)<br>";

?>

