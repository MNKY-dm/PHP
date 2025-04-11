
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP Grafikart PHP</title>
    </head>
    <body>
        <?php require dirname(__DIR__) . DIRECTORY_SEPARATOR . "TP_Grafikart" . DIRECTORY_SEPARATOR . "elements" . DIRECTORY_SEPARATOR . "navbar.php"; ?>
        <header>
            <h1 class="main-title">Mon site</h1>
        </header>
        <footer>
            <?php 
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . "TP_Grafikart" . DIRECTORY_SEPARATOR. 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
            ajouter_vue(); 
            $nbVues = nombre_vues();
            ?>
            <p>Il y a eu <?= $nbVues; ?> visite<?php if ($nbVues > 1):?>s<?php endif; ?> sur cette page. </p> 
        </footer>
    </body>
</html>