<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisir une couleur</title>
</head>
<body>
    <h1>Choisissez une couleur</h1>
    
    <form method="POST">
        <label for="couleur">Entre une couleur :</label>
        <input type="text" name="couleur" id="couleur" required>
        <button type="submit">Valider</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $choix = $_POST['couleur'];

        switch ($choix) {
            case 'bleu':
                echo "Vous avez choisi la couleur bleu";
                break;
            case 'rouge':
                echo "Vous avez choisi la couleur rouge";
                break;
            case 'vert':
                echo "Vous avez choisi la couleur vert";
                break;
            default:
                echo "Vous n'avez pas choisi une couleur valide";
                break;
        }
    }
    ?>
</body>
</html>
