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

print_r($tableau);

for($i = 0; $i < count($tableau); $i++) {
    for($j = $i; $j < count($tableau); $j++) {
        if ($tableau[$i] > $tableau[$j]) {
            $tmp = $tableau[$i];
            $tableau[$i] = $tableau[$j];
            $tableau[$j] = $tmp;
        }
    }
}

print_r($tableau);

?>
</body>
</html>