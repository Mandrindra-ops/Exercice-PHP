<?php
$note = 15; // change to test

echo "Note : $note / 20\n";

// Version if/elseif/else
if ($note >= 16) {
    $mention = "Très Bien";
    $emoji = "🎉";
} elseif ($note >= 14) {
    $mention = "Bien";
    $emoji = "👍";
} elseif ($note >= 12) {
    $mention = "Assez Bien";
    $emoji = "👌";
} elseif ($note >= 10) {
    $mention = "Passable";
    $emoji = "😐";
} else {
    $mention = "Insuffisant";
    $emoji = "💩";
}
$resultat = ($note >= 10) ? "Admis" : "Recalé";

echo "Mention : $mention $emoji\n";
echo "Résultat : $resultat\n";

// Version match() (PHP 8+)
$mention2 = match(true) {
    $note >= 16 => "Très Bien",
    $note >= 14 => "Bien",
    $note >= 12 => "Assez Bien",
    $note >= 10 => "Passable",
    default => "Insuffisant"
};
echo "Mention (match) : $mention2\n";
?>