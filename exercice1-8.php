<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1-8</title>
</head>
<body>
<?php

$tableau = ["Et123" => ["Nom" => "AB", "Prenom" => "AC", "Notes" => ["module1" => 12, "module2" => 15, "module3" => 18]],
            "Et676" => ["Nom" => "BC", "Prenom" => "BD", "Notes" => ["module1" => 13, "module2" => 19, "module3" => 11]],
            "Et998" => ["Nom" => "CD", "Prenom" => "CE", "Notes" => ["module1" => 13, "module2" => 13, "module3" => 18]],
            "Et764" => ["Nom" => "DE", "Prenom" => "DF", "Notes" => ["module1" => 4, "module2" => 12, "module3" => 11]],
            "Et412" => ["Nom" => "AB", "Prenom" => "AC", "Notes" => ["module1" => 18, "module2" => 15, "module3" => 11]],
            "Et688" => ["Nom" => "BC", "Prenom" => "BD", "Notes" => ["module1" => 13, "module2" => 18, "module3" => 13]],
            "Et156" => ["Nom" => "CD", "Prenom" => "CE", "Notes" => ["module1" => 11, "module2" => 5, "module3" => 13]],
            "Et230" => ["Nom" => "DE", "Prenom" => "DF", "Notes" => ["module1" => 2, "module2" => 15, "module3" => 8]]];

echo "<h3> Question 1) </h3>";

foreach($tableau as $code => $infos) {
    echo "etudiant: ".$code. "<br>";
    echo "\t"."Nom: ".$infos["Nom"]." Prenom: ".$infos["Prenom"]." Notes: <br>";
    foreach($infos["Notes"] as $module => $note) {
        echo "\t\t".$module.": ", $note, "<br>";
    }
    echo "<br><br>";
}

echo "<h3> Question 2) </h3>";

foreach($tableau as $code => $infos) {
    $modulemax = "module1";
    $modulemin = "module1";
    $notemin = $infos["Notes"][$modulemax];
    $notemax = $infos["Notes"][$modulemin];
    foreach($infos["Notes"] as $module => $note) {
        if ($note > $notemax) {
            $modulemax = $module;
            $notemax = $infos["Notes"][$modulemax];
        }
        if ($note < $notemin) {
            $modulemin = $module;
            $notemin = $infos["Notes"][$modulemin];
        }
    }
    echo $code."<br>module note max: ".$modulemax."<br>module note min: ".$modulemin."<br><br>";
}

echo "<h3> Question 3) </h3>";
$maxm1 = 0;
$minm1 = 20;
$maxm2 = 0;
$minm2 = 20;
$maxm3 = 0;
$minm3 = 20;

foreach($tableau as $code => $infos) {
    if ($maxm1 < $infos["Notes"]["module1"]) $maxm1 = $infos["Notes"]["module1"];
    if ($minm1 > $infos["Notes"]["module1"]) $minm1 = $infos["Notes"]["module1"];
    if ($maxm2 < $infos["Notes"]["module2"]) $maxm2 = $infos["Notes"]["module2"];
    if ($minm2 > $infos["Notes"]["module2"]) $minm2 = $infos["Notes"]["module2"];
    if ($maxm3 < $infos["Notes"]["module3"]) $maxm3 = $infos["Notes"]["module3"];
    if ($minm3 > $infos["Notes"]["module3"]) $minm3 = $infos["Notes"]["module3"];
}

echo "best score module 1: ", $maxm1, "<br>";
echo "worst score module 1: ", $minm1, "<br>";
echo "best score module 2: ", $maxm2, "<br>";
echo "worst score module 2: ", $minm2, "<br>";
echo "best score module 3: ", $maxm3, "<br>";
echo "worst score module 3: ", $minm3, "<br>";

echo "<h3> Question 4) </h3>";

foreach($tableau as $code => $infos) {
    $moyenne = 0;
    foreach($infos["Notes"] as $note) {
        $moyenne += $note;
    }
    $moyenne /= 3;
    if ($moyenne >= 10) echo "Etudiant ".$code.", Note: ", $moyenne, ", V<br>";
    else echo "Etudiant ".$code.", Note: ", $moyenne, ", NV<br>";
}



?>
</body>
</html>