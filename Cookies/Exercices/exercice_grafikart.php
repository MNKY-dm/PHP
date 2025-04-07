<?php 
var_dump($_POST);

if (isset($_POST['anneeNaissance'])) {
    $anneeNaissance = $_POST['anneeNaissance'];
    $age = 2025 - $anneeNaissance;
    setcookie('age', $age);
}

var_dump($_COOKIE);
?>

<h2>Saisissez votre âge : </h2>
<form action="exercice_grafikart.php" method="post">
    <select name="anneeNaissance" id="anneeNaissance">
        <?php for ($i =2015; $i> 1919; $i--) : ?>
            <option value="<?= $i ?>"><?= $i ?></option>
        <?php endfor ?>
    </select>
    <input type="submit" value="Valider">
</form>

