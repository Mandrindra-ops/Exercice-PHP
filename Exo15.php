<?php
$panier = [
    ["nom" => "Laptop Pro", "prix" => 1299.99, "quantite" => 1],
    ["nom" => "Souris Gaming", "prix" => 49.99, "quantite" => 2],
    ["nom" => "Câble USB", "prix" => 5.99, "quantite" => 3]
];

$sousTotal = 0;

echo "Détail du panier :\n";
foreach ($panier as $item) {
    $totalLigne = $item["prix"] * $item["quantite"];
    $sousTotal += $totalLigne;
    echo $item["nom"] . " × " . $item["quantite"] . " = " . number_format($totalLigne, 2) . "€\n";
}

$remise = 0;
if ($sousTotal > 100) {
    $remise = $sousTotal * 0.10;
}
$totalTTC = $sousTotal - $remise;

echo "------------------------\n";
echo "Sous-total        : " . number_format($sousTotal, 2) . "€\n";
if ($remise > 0) {
    echo "Remise (10%)      : -" . number_format($remise, 2) . "€\n";
}
echo "TOTAL TTC         : " . number_format($totalTTC, 2) . "€\n";
?>