<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $heure = -1; 

    $message = ($heure >= 0 && $heure < 12) ? "C'est le matin !" :
            (($heure >= 12 && $heure < 24) ? "C'est l'apres midi !" :
            "T'as merdé avec l'heure la !!");

    echo $message;
    ?>

</body>
</html>