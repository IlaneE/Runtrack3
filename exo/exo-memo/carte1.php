<?php 

// require_once('carte.php');

// Tableau contenant les valeurs des cartes
$cartes = range(1, 8);

// Mélange le tableau
shuffle($cartes);

// Vérifie si un bouton a été soumis
$carte = isset($_GET["button_id"]) ? $_GET["button_id"] : null;
$message = '';

// Affiche le message selon la carte choisie
if ($carte) {
    $index = array_search($carte, $cartes);
    if ($index !== false) {
        $message = '<style>#disp' . $index . ' { opacity:0%; } </style>
        <button type="submit" class="button' . $index . '" name="button_id" value="' . $carte . '">
            <div class="carte' . $index . '"><img class="cas' . $index . '" src="images/dragibus' . $index . '.png"/></div>
        </button>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carte.css"/>
</head>
<body>
    <?php
    // Affiche les boutons pour chaque carte
    foreach ($cartes as $index => $carte) {
        echo '<button type="submit" class="button' . $index . '" name="button_id" value="' . $carte . '">
                <div class="carte' . $index . '"><img class="cas' . $index . '" src="images/dragibus' . $carte . '.png"/></div>
              </button>';
    }
    ?>

    <!-- Affichage du message -->
    <div id="disp"><?php echo $message; ?></div>

</body>
</html>