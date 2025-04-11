<?php

function ajouter_vue (){

    if (file_exists('compteur.txt')) {
        $file = fopen('compteur.txt', 'r+');
        $compteur = file_get_contents($file)
        fwrite($file, $compteur + 1)
    } else {
        file_put_contents($file, '1');
    }
    fclose($file);
}

?>
