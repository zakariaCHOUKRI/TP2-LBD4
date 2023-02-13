<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 6</title>
</head>
<body>
<?php

$emails = ["zakaria.choukri@um6p.ma",
        "zakaria.choukri@gmail.com",
        "zakaria.choukri@hotmail.com",
        "zakaria.choukri@yahoo.com",
        "zakaria.choukri@outlook.com",
        "choukri.zakaria@um6p.ma",
        "choukri@um6p.ma",
        "choukri.zakaria@yahoo.com"];


$domains = [];

foreach($emails as $email) {
    array_push($domains, explode("@", $email)[1]);
}

var_dump($domains);

var_dump(array_count_values($domains));

print_r(array_count_values($domains));

?>



</body>
</html>