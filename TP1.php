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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titanic</title>
</head>
<body>
    <form action="TP1.php" method="get">
        <ul>
            <li>
                <label for="gender">
                    Le genre de la personne : 
                    <input type="text" placeholder="Genre" id="gender">
                </label>
            </li>
            <li>
                <label for="age">
                    L'âge de la personne : 
                    <input type="text" placeholder="Âge" id="gender">
                </label>
            </li>
            <li>
                <label for="classe">
                    La classe de transport de la personne : 
                    <select name="classe" id="classe" >
                        <option value="">Sélectionner la classe</option>
                        <option value="premiereClasse">1</option>
                        <option value="secondeClasse">2</option>
                        <option value="troisièmeClasse">3</option>
                    </select>
                </label>
            </li>
            <li>
                <label for="survived">
                    La personne a survécu :
                    <input type="radio" id="survived" name="survived">
                </label><br>
                <label for="notSurvived">
                    La personne n'a pas survécu :
                    <input type="radio" id="notSurvived" name="notSurvived">
                </label>
            </li>
            <li>
                <label for="embarkment">
                    <select name="embarkment" id="embarkment">
                        <option value="S">Southampton</option>
                        <option value="Q">Quechua</option>
                        <option value="C">Château</option>
                    </select>
                </label>
            </li>
            <li>
                <label for="gender">
                    <input type="text" placeholder="Genre" id="gender">
                </label>
            </li>
            <li>
                <label for="gender">
                    <input type="text" placeholder="Genre" id="gender">
                </label>
            </li>
        </ul>
    </form>
</body>
</html>