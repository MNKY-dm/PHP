<?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . "TP_Grafikart" . DIRECTORY_SEPARATOR. 'functions' . DIRECTORY_SEPARATOR . 'compteur.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Grafikart PHP</title>
</head>
<body>
    <?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . "elements" . DIRECTORY_SEPARATOR . "navbar.php"; ?>
    <header>
        <h1 class="main-title">Mon site</h1>
    </header>
    <footer>
        <h2 class="compteur">Compteur : <?= $compteur ?> </h2> 
    </footer>
</body>
</html>