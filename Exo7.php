<?php
$client = "Mandrindra";
$produitA = 29.99;
$produitB = 14.50;
$total = $produitA + $produitB;

$facture = <<<EOT
FACTURE #001
Client : $client

Produit A : $produitA Ariary
Produit B : $produitB Ariary
Total : $total Ariary
EOT;

echo $facture . "\n";
?>