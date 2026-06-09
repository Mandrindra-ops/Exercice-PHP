<?php
$argent = 2.50;
$choix = "Soda"; // Eau, Café, Soda

$prix = match($choix) {
    "Eau" => 1.00,
    "Café" => 1.50,
    "Soda" => 2.00,
    default => null
};

if ($prix === null) {
    echo "Produit inconnu.\n";
} elseif ($argent >= $prix) {
    $monnaie = $argent - $prix;
    echo "Votre $choix : (" . number_format($prix, 2) . " €)\n";
    echo "Monnaie rendue : " . number_format($monnaie, 2) . "€\n";
} else {
    $manque = $prix - $argent;
    echo "Argent insuffisant. Il manque " . number_format($manque, 2) . "€\n";
}
?>