<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1-5</title>
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

$capitales = ["Maroc" => "Rabat", "Allemagne" => "Berlin",
            "Serbie" => "Belgrade", "Bresil" => "Brasilia",
            "Slovaquie" => "Bratislava", "Italie" => "Rome",
            "Venezuela" => "Caracas", "Moldavie" => "Chisinau",
            "Guyana" =>"Georgetown", "VietNam" =>"Hanoi",
            "Zimbabwe" => "Harare", "Cuba" =>"Havane",
            "PaysBas" =>"LaHaye", "Finlande" => "Helsinki"];

echo "<h3> Question 1 </h3>";
foreach($capitales as $country => $city) {
    echo $country." : ".$city."<br>";
}

echo "<h3> Question 2 </h3>";


?>


<table>
  <tr>
    <th>Pays</th>
    <th>Capitale</th>
  </tr>
    <?php
        foreach($capitales as $country => $city) {
            echo "<tr>";
            echo "<td>".$country."</td>";
            echo "<td>", $city, "</td>";
            echo "<tr>";
        }
    ?>
</table>


<?php

echo "<h3> Question 3 </h3>";


function trouverCapitale($pays) {
    global $capitales;
    echo "la capitale du ".$pays." est: ".$capitales[$pays]."<br>";
}

trouverCapitale("Maroc");
trouverCapitale("Zimbabwe");
trouverCapitale("Italie");
trouverCapitale("Cuba");

?>

</body>
</html>