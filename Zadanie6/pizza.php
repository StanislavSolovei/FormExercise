<?php

$km = (float)($_POST['km'] ?? 0);
$is_warm = isset($_POST['warm']);

$base_cost = $km * 0.50;

if ($is_warm){
    $final_cost = $base_cost * 1.15;
} else {
    $final_cost = $base_cost;
}

echo "Odległość: $km km<br>";
echo "Opcja 'ciepła': " . ($is_warm ? "TAK" : "NIE") . "<br>";
echo "<h2>Koszt dostawy: " . number_format($final_cost, 2) . " zł</h2>";

?>