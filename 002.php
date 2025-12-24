<?php
//----------------------------------------------------------------------EJERCICIO 2-----------------------------------------------------------

$carrito = [
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

function calcularTotal($carrito) {
    $total = 0;

    foreach ($carrito as $item) {
        $subtotal = $item["precio"] * $item["cantidad"];
        $total += $subtotal;
    }

    return $total;
}

foreach ($carrito as $item) {
    $nombre = $item["producto"];
    $precio = $item["precio"];
    $cantidad = $item["cantidad"];
    $subtotal = $precio * $cantidad;

    echo "Producto: $nombre<br>";
    echo "Precio unitario: $precio €<br>";
    echo "Cantidad: $cantidad<br>";
    echo "Subtotal: $subtotal €<br><br>";
}

$totalSinDescuento = calcularTotal($carrito);

if ($totalSinDescuento > 1000) {
    $descuento = $totalSinDescuento * 0.10;
} elseif ($totalSinDescuento > 500) {
    $descuento = $totalSinDescuento * 0.05;
} else {
    $descuento = 0;
}

$totalFinal = $totalSinDescuento - $descuento;

echo "<hr>";
echo "Total sin descuento: $totalSinDescuento €<br>";
echo "Descuento aplicado: $descuento €<br>";
echo "Total final: $totalFinal €<br>";

?>

