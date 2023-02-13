<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 1-4</title>
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
<table>
  <tr>
    <th></th>
    <?php for ($j = 2; $j <= 10; $j++) {
        echo "<th>$j</th>";
    } ?>
  </tr>
  <?php for ($i = 2; $i <= 10; $i++) {
      echo "<tr>";
      echo "<th>$i</th>";
      for ($j = 2; $j <= 10; $j++) {
          $produit = $i * $j;
          echo "<td>$produit</td>";
      }
      echo "</tr>";
  } ?>

</body>
</html>