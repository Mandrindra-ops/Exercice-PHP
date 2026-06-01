<?php
$user = [
    "nom" => "Mandrindra",
    "age" => 15,
    "email" => "Mandrindra.@example.com",
    "role" => "PDG",
    "actif" => true
];
echo "Nom : " . $user["nom"] . "\n";
echo "Âge : [" . $user["age"] . " ans\n";
echo "Email : " . $user["email"] . "\n";
echo "Rôle : " . $user["role"] . "\n";
echo "Actif : " . ($user["actif"] ? "Oui" : "Non") . "\n";

//Modification et Ajout
$user["role"] = "Admin";
$user["score"] = 150;


echo "\nClés disponibles : " . implode(", ", array_keys($user)) . "\n";
?>