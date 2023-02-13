<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1-3</title>
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

echo "<h3> Question 1 </h3>";
$notes = ["Ahmed" => 14, "Joudia" => 19, "Samir" => 14, "Yasser" => 14.5, "Aya" => 12, "Ilham" => 16, "Yassine" => 17];
var_dump($notes);

echo "<h3> Question 2 </h3>";
foreach($notes as $nom => $note) {
    echo "Nom: ".$nom.", note = ", $note, "<br>";
}

echo "<h3> Question 3 </h3>";
?>

<table>
  <tr>
    <th>Nom</th>
    <th>Note</th>
  </tr>
    <?php
        foreach($notes as $nom => $note) {
            echo "<tr>";
            echo "<td>".$nom."</td>";
            echo "<td>", $note, "</td>";
            echo "<tr>";
        }
    ?>
</table>

<?php

echo "<h3> Question 4 </h3>";
$majorant = array_keys($notes)[0];
foreach($notes as $nom => $note) {
    if ($note > $notes[$majorant]) {
        $majorant = $nom;
    }
}
echo "l'etudiant qui a la note la plus elevee est: ".$majorant;

echo "<h3> Question 5 </h3>";
$minorant = array_keys($notes)[0];
foreach($notes as $nom => $note) {
    if ($note < $notes[$minorant]) {
        $minorant = $nom;
    }
}
echo "l'etudiant qui a la note min est: ".$minorant;

echo "<h3> Question 6 </h3>";
$moyenne = 0;
foreach($notes as $note) {
    $moyenne += $note;
}
$moyenne /= count($notes);
echo "la moyenne de la classe est: ", $moyenne;
?>
</body>
</html>