<?php
define("TVA", 0.20);

$prixHT = 49.99;

$montantTVA = $prixHT * TVA;
$prixTTC = $prixHT + $montantTVA;

echo "Prix HT :" . number_format($prixHT, 2) . " Ariary\n";
echo "TVA (20%) :" . number_format($montantTVA, 2) . " Ariary\n";
echo "Prix TTC :" . number_format($prixTTC, 2) . " Ariary\n";

?>