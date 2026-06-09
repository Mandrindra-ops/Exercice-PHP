<?php
$n = 7;

echo "Table de multiplication de $n :\n";
for ($i = 1; $i <= 10; $i++) {
    $result = $n * $i;
    printf("%d × %2d = %3d\n", $n, $i, $result);
}

echo "\nGrille 5×5 :\n";
echo "    ";
for ($i = 1; $i <= 5; $i++) {
    printf("%3d ", $i);
}
echo "\n";
for ($i = 1; $i <= 5; $i++) {
    printf("%2d: ", $i);
    for ($j = 1; $j <= 5; $j++) {
        printf("%3d ", $i * $j);
    }
    echo "\n";
}
?>