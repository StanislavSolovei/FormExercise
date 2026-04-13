<?php

$price = (float)str_replace(',', '.', $_POST['price']);
$dist = (float)$_POST['distance'];
$fuel = (float)str_replace(',', '.', $_POST['fuel']);

if ($price <= 0 || $dist <= 0 || $fuel <= 0) {
    die("Wprowadź poprawne dane!");
}

$total_cost = ($dist / 100) * $fuel * $price;

echo "Cena paliwa: $price zł/l<br>";
echo "Dystans: $dist km<br>";
echo "Spalanie: $fuel l/100km<br>";
echo "<h3>Łączny koszt przejazdu: " . number_format($total_cost, 2) . " zł</h3>";
?>