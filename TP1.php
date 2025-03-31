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
        $correspond = 0;
        if($data[4] === 'female') {
            $correspond++;
            if ($data[5] >= "18") {
                $correspond++;
                if ($data[2] === "1") {
                    $correspond++;
                    if ($data[11] === 'S') {
                        $correspond++;
                        if (str_contains($data[10], 'D')) {
                            $correspond++;
                            if ($data[6] === "1") {
                                $correspond++;
                                if ($data[7] === "1"){
                                    $correspond++;
                                }
                            }
                        }
                    }
                }
            }
        }
        if ($correspond === 7) {
            fclose($file);
            return $data[0];
        }
    }
    fclose($file);

    };




?>