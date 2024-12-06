<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>My first PHP page</h1>
    </header>
    <main>
    <?php
        $sexe = "homme"; 

        if ($sexe === "homme") {
            echo "Bonjour Monsieur !";
        } elseif ($sexe === "femme") {
            echo "Bonjour Madame !";
        } else {
            echo "Erreur : Valeur de la variable sexe incorrecte.";
        }
    ?>

    </main>
    <footer>
        <p>&copy; 2020</p>
    </footer>
</body>
</html>
