<?php
// Première étape de sécurité : verifier la méthode
if ($_SERVER['REQUEST_METHOD'] !== "GET") {
    echo "<p>Mauvaise méthode</p>";
    exit();
}

// Deuxieme étape de sécurité : verifier que la colonne voulue existe bien
if (!isset($_GET["startDate"]) || !isset($_GET["endDate"])) {
    echo "<p>Un des paramètres est manquant</p>";
    exit();
}

// Troisième étape de sécurité : verifier que la colonne voulue n'est pas vide
if (empty($_GET["startDate"]) || empty($_GET["endDate"])) {
    echo "<p>Un des paramètres est vide</p>";
    exit();
}

// Quatrième étape de sécurité : on empêche l'utilisation de balise (par exemple script)
$startDate = htmlspecialchars(strip_tags(trim($_GET["startDate"])));
$endDate = htmlspecialchars(strip_tags(trim($_GET["endDate"])));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
    <link rel="stylesheet" href="../assets/styles/style.css">
</head>

<body>
    <h2>Exercice 3</h2>
    <p>Première date : <?= $startDate ?><br>
        Deuxième date : <?= $endDate ?></p>
</body>

</html>