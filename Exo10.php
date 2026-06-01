<?php
$catalogue = [
    ["nom" => "Laptop Pro", "prix" => 1299.99, "stock" => 5, "categorie" => "Informatique"],
    ["nom" => "Souris Gaming", "prix" => 49.99, "stock" => 23, "categorie" => "Périphérique"],
    ["nom" => "Clavier Meca", "prix" => 129.00, "stock" => 12, "categorie" => "Périphérique"]
];

// Valeur totale du stock
$valeurTotale = 0;
foreach ($catalogue as $produit) {
    $valeurTotale += $produit["prix"] * $produit["stock"];
}

// Tri par prix décroissant (produit le plus cher en premier)
usort($catalogue, function($a, $b) {
    return $b["prix"] - $a["prix"];
});

$plusCher = $catalogue[0]; // après tri, le premier est le plus cher

// Affichage formaté
foreach ($catalogue as $produit) {
    echo $produit["nom"] . " | " . number_format($produit["prix"], 2) . "€ | stock: " . $produit["stock"] . "\n";
}

echo "\nValeur totale du stock : " . number_format($valeurTotale, 2) . "€\n";
echo "Produit le plus cher : " . $plusCher["nom"] . "\n";
?>