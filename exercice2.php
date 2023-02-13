<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 2</title>
</head>
<body>
<?php

$moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre','Octobre', 'Novembre', 'Décembre');
print_r($moisFr);
echo "<br><br>";

for ($i = 1; $i < count($moisFr)+1; $i++) {
    echo $i, "- ".$moisFr[$i]."<br>";
}

echo "<br>";

foreach($moisFr as $key => $value) {
    echo $key, "- ".$value."<br>";
}

echo "<br>";

echo $moisFr[ltrim(date("m"), '0')], "<br>";

echo $moisFr[intval(date("m"), '0')], "<br><br>";

$moisFr2 = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 13 => 'Juillet', 'Aout', 'Septembre','Octobre', 'Novembre', 'Décembre');
var_dump($moisFr2);
foreach($moisFr2 as $mois) {
    echo $mois, "<br>";
}

?>
</body>
</html>