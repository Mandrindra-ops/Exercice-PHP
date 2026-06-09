<?php
$username = "ab";
$email = "testexample.com";
$age = 16;
$password = "short";

$errors = [];

if (strlen($username) < 3 || strlen($username) > 20) {
    $errors[] = "Le nom d'utilisateur doit faire 3 à 20 caractères";
}
if (!strpos($email, '@')) {
    $errors[] = "L'email n'est pas valide (doit contenir '@')";
}
if ($age < 18) {
    $errors[] = "Vous devez avoir 18 ans ou plus";
}
if (strlen($password) < 8) {
    $errors[] = "Le mot de passe doit contenir au moins 8 caractères";
}

if (empty($errors)) {
    echo "Formulaire valide !\n";
} else {
    foreach ($errors as $error) {
        echo "- $error\n";
    }
}
?>