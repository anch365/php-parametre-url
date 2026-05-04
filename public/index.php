<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (isset($_GET['lastname'])&&isset($_GET['firstname'])) { ?>
       <p>Nom : <?= htmlspecialchars($_GET['lastname']) ?><br> 
       Prenom : <?= htmlspecialchars($_GET['firstname']) ?></p> 
    <?php } else { ?>
        <p>Les paramètres sont manquants</p>
    <?php }
    ?>
</body>
</html>