<?php
// Première étape de sécurité : verifier la méthode
if ($_SERVER['REQUEST_METHOD'] !== "GET") {
    echo "<p>Mauvaise méthode</p>";
    exit();
}

// Deuxieme étape de sécurité : verifier que la colonne voulue existe bien
if (!isset($_GET["week"])) {
    echo "<p>Le paramètre est manquant</p>";
    exit();
}

// Troisième étape de sécurité : verifier que la colonne voulue n'est pas vide
if (empty($_GET["week"])) {
    echo "<p>Le paramètre est vide</p>";
    exit();
}

// Quatrième étape de sécurité : on empêche l'utilisation de balise (par exemple script)
$week = htmlspecialchars(strip_tags(trim($_GET["week"])));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
    <link rel="stylesheet" href="../assets/styles/style.css">
</head>

<body>
    <h2>Exercice 5</h2>
    <p>Semaine : <?= $week ?></p>
</body>

</html>