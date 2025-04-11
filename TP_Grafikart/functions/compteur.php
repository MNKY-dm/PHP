<?php

function ajouter_vue (){
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . "functions" . DIRECTORY_SEPARATOR . "compteur.txt";
    $compteur = 1;
    if (file_exists($file)) {
        $compteur = (int)file_get_contents($file);
        $compteur++;
    } 
    file_put_contents($file, $compteur);
}

function nombre_vues () : string {
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . "functions" . DIRECTORY_SEPARATOR . "compteur.txt";
    return file_get_contents($file);
}

function reset_compteur () {
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . "functions" . DIRECTORY_SEPARATOR . "compteur.txt";
    file_put_contents($file, '0');
}

?>
