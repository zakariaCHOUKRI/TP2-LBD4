<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1-6</title>
</head>
<body>
<?php

echo "<h3> Question 1 </h3>";

$tableau = ["WEB" => ["PHP" => ["Lien" => "https://www.php.net/", "Avis" => 5],
                      "HTML" => ["Lien" => "https://www.w3schools.com/html/default.asp", "Avis" => 4],
                      "JavaScript" => ["Lien" => "https://www.javascript.com/", "Avis" => 5],
                      "CSS" => ["Lien" => "https://www.w3schools.com/css/", "Avis" => 4]],
            "DB" => ["MySQL" => ["Lien" => "https://www.mysql.com/", "Avis" => 5],
                     "PostgreSQL" => ["Lien" => "https://www.postgresql.org/", "Avis" => 5],
                     "Oracle" => ["Lien" => "https://www.oracle.com/", "Avis" => 4],
                     "DB2" => ["Lien" => "https://www.ibm.com/products/db2", "Avis" => 4]]];

var_dump($tableau);


echo "<h3> Question 2 </h3>";
foreach($tableau as $categorie => $entree) {
    echo $categorie.":<br>";
    foreach($entree as $infos) {
        echo $infos["Lien"]."<br>";
    }
    echo "<br>";
}

echo "<h3> Question 3 </h3>";

// foreach($tableau as $categorie => $entree) {
//     $sites = [];
// }


?>

</body>
</html>