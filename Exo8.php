<?php
$courses = ["Mac", "souris sans fil", "iphone", "airpods", "ipad"];

$courses[] = "clavier mécanique"; // Ajouter un nouvel élément à la fin du tableau

unset($courses[2]); // Supprimer l'élément à l'index 2 (iphone)

echo "Liste finale des courses :\n";
foreach ($courses as $indice => $article) {
    echo "[$indice] $article\n";
}
echo "Total : " . count($courses) . " articles\n";
?>