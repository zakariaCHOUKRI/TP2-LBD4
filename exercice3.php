<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3</title>
</head>
<body>
<?php

$notes = [12, 15, 9, 13, 14, 11, 20, 8, 6, 17, 19, 9, 15, 20, 13];

echo "<h3> Question 1 </h3>";
function afficher($tableau) {
    foreach ($tableau as $element) {
        echo $element, "<br>";
    }
}
afficher($notes);


echo "<h3> Question 2 </h3>";
function moyenne($tableau) {
    $moyenne = 0;
    foreach($tableau as $element) {
        $moyenne += $element;
    }
    $moyenne /= count($tableau);
    return $moyenne;
}

echo moyenne($notes);

echo "<h3> Question 3 </h3>";
function plusQue10($tableau) {
    $count = 0;
    foreach($tableau as $element) {
        if ($element > 10) $count++;
    }
    return $count;
}

echo plusQue10($notes);


echo "<h3> Question 4 </h3>";
function combienDe20($tableau) {
    $count = 0;
    foreach($tableau as $element) {
        if ($element == 20) $count++;
    }
    return $count;
}

echo combienDe20($notes);


echo "<h3> Question 5 </h3>";
function triAscendant($tableau) {
    for($i = 0; $i < count($tableau); $i++) {
        for($j = $i; $j < count($tableau); $j++) {
            if ($tableau[$i] > $tableau[$j]) {
                $tmp = $tableau[$i];
                $tableau[$i] = $tableau[$j];
                $tableau[$j] = $tmp;
            }
        }
    }
    return $tableau;
}

afficher(triAscendant($notes));


echo "<h3> Question 6 </h3>";
function recherche($tableau, $valeur) {
    foreach($tableau as $key => $value) {
        if ($value == $valeur) return $key;
    }
    return -1;
}

echo recherche($notes, 20);

?>
</body>
</html>