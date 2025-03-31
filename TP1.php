<?php
// A l’aide de PHP, retrouver le passager présentant les caractéristes suivants :
// — une femme (Sex)
// — majeure (Age)
// — en première classe (Pclass)
// — qui a survécu (Survived)
// — qui a embarqué au port de Southampton (S)
// — qui était dans une cabine commençant par la lettre D (Cabin)
// — avec un frère/sœur ou conjoint (sibsp)
// — avec un enfant (parch)
// Fichier : tp.remidurand.com/tp2/exo4/titanic.csv

echo searchTitanic();
function searchTitanic(){
    $file = fopen("titanic.csv","r");

    while(($data = fgetcsv($file)) !== FALSE) {
        if(($data[3] === 'female') && 
        ($data[5] >= 18) && 
        ($data[2] === 1) &&
        ($data[11] === 'S') &&
        ($data[10][0] === 'D') &&
        ($data[6] === 1) &&
        ($data[7] === 1)){
            fclose($file);
            return $data[4];
        }
        else {
            fclose($file);
            return "Passagère introuvable";
        }
    }

};




?>