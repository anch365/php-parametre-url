<?php
// Première étape de sécurité : verifier la méthode
if ($_SERVER['REQUEST_METHOD'] !== "GET") {
    echo "<p>Mauvaise méthode</p>";
    exit();
}

// Deuxieme étape de sécurité : verifier que la colonne voulue existe bien
if (!isset($_GET["language"]) || !isset($_GET["server"])) {
    echo "<p>Un des paramètres est manquant</p>";
    exit();
}

// Troisième étape de sécurité : verifier que la colonne voulue n'est pas vide
if (empty($_GET["language"]) || empty($_GET["server"])) {
    echo "<p>Un des paramètres est vide</p>";
    exit();
}

// Quatrième étape de sécurité : on empêche l'utilisation de balise (par exemple script)
$language = htmlspecialchars(strip_tags(trim($_GET["language"])));
$server = htmlspecialchars(strip_tags(trim($_GET["server"])));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
    <link rel="stylesheet" href="../assets/styles/style.css">
</head>

<body>
    <h2>Exercice 4</h2>
    <p>Language : <?= $language ?><br>
        Serveur : <?= $server ?></p>
</body>

</html>