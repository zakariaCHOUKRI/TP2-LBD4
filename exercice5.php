<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 5</title>
</head>
<body>
<?php

$couleurs = ["Yellow", "Blue", "Red", "Purple", "Black", "Orange", "Cian", "Aqua", "Bisque", "BlueViolet"];

echo "<h3> Question 1 </h3>";

?>

<div class="table">
    <div class="top">
        <div class="t1"></div>
        <div class="t2"></div>
        <div class="t3"></div>
        <div class="t4"></div>
        <div class="t5"></div>
    </div>
    <div class="bottom">
        <div class="b1"></div>
        <div class="b2"></div>
        <div class="b3"></div>
        <div class="b4"></div>
        <div class="b5"></div>
    </div>
</div>

<style>
    .top, .bottom {
        display: flex;
    }
    
    .t1, .t2, .t3, .t4, .t5, .b1, .b2, .b3, .b4, .b5{
        width:200px;
        height:100px;
    }

    .t1 {
        background-color: <?php echo $couleurs[0]?>;
    }

    .t2 {
        background-color: <?php echo $couleurs[1]?>;
    }

    .t3 {
        background-color: <?php echo $couleurs[2]?>;
    }

    .t4 {
        background-color: <?php echo $couleurs[3]?>;
    }

    .t5 {
        background-color: <?php echo $couleurs[4]?>;
    }

    .b1 {
        background-color: <?php echo $couleurs[5]?>;
    }

    .b2 {
        background-color: <?php echo $couleurs[6]?>;
    }

    .b3 {
        background-color: <?php echo $couleurs[7]?>;
    }

    .b4 {
        background-color: <?php echo $couleurs[8]?>;
    }

    .b5 {
        background-color: <?php echo $couleurs[9]?>;
    }
</style>


<?php

echo "<h3> Question 2 </h3>";
function couleurExiste($tableau, $couleur) {
    if (in_array($couleur, $tableau)) echo $couleur." est dans le tableau";
    else echo $couleur." n'est pas dans le tableau";
}
couleurExiste($couleurs, "Yellow");
echo "<br>";
couleurExiste($couleurs, "Greeeen");

echo "<h3> Question 3 </h3>";
function couleurExisteEtIndice($tableau, $couleur) {
    $indice = array_search($couleur, $tableau);
    if ($indice === 0 || $indice) echo $couleur." est dans le tableau, son indice est ", $indice;
    else echo $couleur." n'est pas dans le tableau";
}
couleurExisteEtIndice($couleurs, "Yellow");
echo "<br>";
couleurExisteEtIndice($couleurs, "Greeeen");

?>


</body>
</html>