<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styles/style.css">
</head>
<body>
    <h2>Exercice 1</h2>
    <?php 
    if (isset($_GET['lastname']) && isset($_GET['firstname'])) { ?>
       <p>Nom : <?= htmlspecialchars($_GET['lastname']) ?><br> 
       Prenom : <?= htmlspecialchars($_GET['firstname']) ?></p> 
    <?php } else { ?>
        <p class="error">Les paramètres sont manquants</p>
    <?php }
    ?>
    <h2>Exercice 2</h2>
     <?php 
    if (isset($_GET['lastname']) && isset($_GET['firstname'])) { ?>
       <p>Nom : <?= htmlspecialchars($_GET['lastname']) ?><br> 
       Prenom : <?= htmlspecialchars($_GET['firstname']) ?></p> 
    <?php } ?>
</body>
</html>