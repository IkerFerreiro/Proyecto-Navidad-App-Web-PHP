<?php

$texto = "PHP en internet no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet";

// 1. Minúsculas
$texto = strtolower($texto);
echo "<strong>Texto en minúsculas:</strong> $texto<br><br>";

// 2. Reemplazar caracteres especiales por espacios
$texto = str_replace(["…", ".", ",", ";", ":", "%"], " ", $texto);

// 3. Convertir cualquier cosa que no sea letra o número en espacio
$texto = preg_replace("/[^a-z0-9áéíóúñü]+/u", " ", $texto);

// 4. Separar en palabras (evita espacios dobles)
$palabras = preg_split("/\s+/", trim($texto));

// 5. Filtrar palabras con menos de 3 letras
$palabrasFiltradas = array_filter($palabras, function($p) {
    return mb_strlen($p, "UTF-8") >= 3;
});

// 6. Contar palabras
$totalPalabras = count($palabrasFiltradas);

// 7. Contar repeticiones
$frecuencias = array_count_values($palabrasFiltradas);

// 8. Mostrar palabras repetidas
echo "Palabras repetidas:<br>";
$hayRepetidas = false;

foreach ($frecuencias as $palabra => $cantidad) {
    if ($cantidad > 1) {
        echo "$palabra: $cantidad veces<br>";
        $hayRepetidas = true;
    }
}

if (!$hayRepetidas) {
    echo "No hay palabras repetidas<br>";
}

// 9. Palabra más repetida
$maxRepeticiones = max($frecuencias);
$palabraMasRepetida = array_keys($frecuencias, $maxRepeticiones)[0];

echo "<hr>";
echo "Total de palabras (mínimo 3 letras): $totalPalabras<br>";
echo "Palabra más repetida: $palabraMasRepetida ($maxRepeticiones veces)<br>";

?>
