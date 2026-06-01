<?php
$titre = "introduction à PHP";

$slug = strtolower($titre);                // tout en minuscules
$slug = str_replace(" ", "-", $slug);     // remplacer les espaces par des tirets

echo "Titre : $titre\n";
echo "URL générée : https://monblog.com/$slug\n";
?>