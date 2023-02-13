<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1-7</title>
</head>
<body>
<?php

$tableau = ["Et123" => ["Nom" => "AB", "Prenom" => "AC", "Moyenne" => 17],
            "Et676" => ["Nom" => "BC", "Prenom" => "BD", "Moyenne" => 12],
            "Et998" => ["Nom" => "CD", "Prenom" => "CE", "Moyenne" => 9],
            "Et764" => ["Nom" => "DE", "Prenom" => "DF", "Moyenne" => 6.5],
            "Et412" => ["Nom" => "AB", "Prenom" => "AC", "Moyenne" => 17],
            "Et688" => ["Nom" => "BC", "Prenom" => "BD", "Moyenne" => 8],
            "Et156" => ["Nom" => "CD", "Prenom" => "CE", "Moyenne" => 19],
            "Et230" => ["Nom" => "DE", "Prenom" => "DF", "Moyenne" => 10]];

echo "<h3> Question 1) </h3>";

foreach($tableau as $code => $infos) {
    echo "etudiant: ".$code. "<br>";
    foreach($infos as $key => $value) {
        echo "\t".$key." : ", $value, " ";
    }
    echo "<br><br>";
}

echo "<h3> Question 2) </h3>";
$majorant = array_keys($tableau)[0];

foreach($tableau as $code => $infos) {
    if ($tableau[$code]["Moyenne"] > $tableau[$majorant]["Moyenne"]) {
        $majorant = $code;
    }
}

echo "le majorant est: ".$majorant;

echo "<h3> Question 3) </h3>";
$minorant = array_keys($tableau)[0];

foreach($tableau as $code => $infos) {
    if ($tableau[$code]["Moyenne"] < $tableau[$minorant]["Moyenne"] && $tableau[$code]["Moyenne"] >= 10) {
        $minorant = $code;
    }
}

echo "le minorant validant est: ".$minorant;

echo "<h3> Question 4) </h3>";
echo "les etudiants n'ayant pas valide l'annee sont: <br>";

foreach($tableau as $code => $infos) {
    if ($tableau[$code]["Moyenne"] < 10) {
        echo $code."<br>";
    }
}



?>
</body>
</html>