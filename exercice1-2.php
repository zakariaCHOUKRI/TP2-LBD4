<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1-2</title>
</head>
<body>
<?php

$tab=array("PHP"=>"http://www.php.net",
        "MySQL"=>"http://www.mysql.org",
        "SQLite"=>"http://www.sqlite.org",
        "HTML"=>"https://www.w3schools.com/html/default.asp",
        "CSS"=>"https://www.w3schools.com/css/default.asp");

echo $tab[array_rand($tab)];

?>
</body>
</html>