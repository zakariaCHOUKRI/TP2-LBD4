<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1</title>
</head>
<body>
<?php

$tableau = [2, 6, 7, 6, 3, 2, 1, 4, 5, 2, 3, 6, 9, 7, 2];

echo "<h3> Question 1 </h3>";
foreach($tableau as $elem) {
    echo $elem, "<br>";
}


echo "<h3> Question 2 </h3>";
for($i = 0; $i < count($tableau); $i++) {
    for($j = $i; $j < count($tableau); $j++) {
        if ($tableau[$i] > $tableau[$j]) {
            $tmp = $tableau[$i];
            $tableau[$i] = $tableau[$j];
            $tableau[$j] = $tmp;
        }
    }
}

foreach($tableau as $elem) {
    echo $elem, "<br>";
}


echo "<h3> Question 3 </h3>";
$tableau2 = [];
array_push($tableau2, $tableau[0]);
$i = 0;
$j = 0;
while ($i < count($tableau)) {
    if ($tableau[$i] != $tableau2[$j]) {
        $j++;
        array_push($tableau2, $tableau[$i]);
    }
    $i++;
}

foreach($tableau2 as $elem) {
    echo $elem, "<br>";
}


?>
</body>
</html>