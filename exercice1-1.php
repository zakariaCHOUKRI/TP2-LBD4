<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1-1</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<?php

$ages = ["Ahmed" => 34, "Zakaria" => 19, "Nada" => 8, "Karima" => 23, "Amine" => 50];

echo "<h3> Question 1 </h3>";
var_dump($ages);

echo "<h3> Question 2 </h3>";
foreach($ages as $nom => $age) {
    echo $nom." a ", $age, " ans.<br>";
}

echo "<h3> Question 3 </h3>";


?>

<table>
  <tr>
    <th>Nom</th>
    <th>Age</th>
  </tr>
    <?php
        foreach($ages as $nom => $age) {
            echo "<tr>";
            echo "<td>".$nom."</td>";
            echo "<td>", $age, "</td>";
            echo "<tr>";
        }
    ?>
</table>


</body>
</html>