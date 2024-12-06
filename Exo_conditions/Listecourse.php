<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $liste_courses = [
        "Pomme" => 5,
        "Jambon" => 10,
        "Chaussette" => 7,
        "Bonnet" => 15
    ];

    echo "<table border='1'>";
    echo "<tr><th>Article</th><th>Prix (€)</th></tr>";
    foreach ($liste_courses as $article => $prix) {
        echo "<tr><td>$article</td><td>$prix</td></tr>";
    }
    echo"<tr><td>Total</td><td>".array_sum($liste_courses)."</td></tr>";
    echo "</table><br>";

    $MonArgent = 38;
    echo "J'ai $MonArgent €.<br><br>";
    switch ($MonArgent) {
        case $MonArgent > array_sum($liste_courses):
            echo "J'ai assez d'argent pour tout acheter, il me reste ".$MonArgent-array_sum($liste_courses)."€.";
            break;
        case $MonArgent < array_sum($liste_courses):
            echo "Je n'ai pas assez d'argent pour tout acheter, il me manque ".$MonArgent-array_sum($liste_courses)."€.";
            break;
        case $MonArgent = array_sum($liste_courses):
            echo "J'ai juste assez d'argent pour tout acheter.";
            break;
    }
?>


 

</body>
</html>