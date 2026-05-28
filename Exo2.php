<?php
$a = "Bonjour";
$b = "le monde";

echo "avant a = $a, b = $b\n"; 

$temp = $a;
$a = $b;
$b = $temp;

echo "après a = $a, b = $b\n";

?>