<?php
$nom = "Fatima Zahra";
$poste = "Développeuse Web";
$email = "fatima@example.com";

$signature1 = "Cordialement, " . $nom . " — " . $poste . " " . $email;

$signature2 = "Cordialement, $nom — $poste $email";

echo $signature1 . "\n";
echo $signature2 . "\n";
?>