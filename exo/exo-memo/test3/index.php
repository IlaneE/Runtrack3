<?php
session_start();

if (isset($_POST['reset'])) {
    session_destroy();
    session_start();
}

if (!isset($_SESSION['cartes'])) {
    $cartes = range(1, 6);
    $cartes = array_merge($cartes, $cartes); 
    shuffle($cartes);
    $_SESSION['cartes'] = $cartes;
    $_SESSION['decouvertes'] = [];
    $_SESSION['tentatives'] = 0;
    $_SESSION['paires'] = [];
}

if (isset($_POST['carte'])) {
    $index = (int)$_POST['carte'];

    if (!in_array($index, $_SESSION['decouvertes']) && count($_SESSION['decouvertes']) < 2) {
        $_SESSION['decouvertes'][] = $index;
        $_SESSION['tentatives']++;

        if (count($_SESSION['decouvertes']) === 2) {
            $firstCard = $_SESSION['cartes'][$_SESSION['decouvertes'][0]];
            $secondCard = $_SESSION['cartes'][$_SESSION['decouvertes'][1]];

            if ($firstCard === $secondCard) {
                $_SESSION['paires'][] = $firstCard;
            }

            header("Refresh: 1"); 
            $_SESSION['decouvertes'] = [];
        }
    }
}

function afficher_cartes($cartes, $decouvertes, $paires) {
    $images = [
        1 => 'images/drag.png',
        2 => 'images/bon.png',
        3 => 'images/ours.png',
        4 => 'images/tete.png',
        5 => 'images/car.png',
        6 => 'images/croco.png'
    ];

    echo "<div class='blockcarte'>";

    foreach ($cartes as $index => $carte) {
        if (in_array($index, $decouvertes) || in_array($carte, $paires)) {
            // Affiche la carte si elle est découverte ou fait partie d'une paire trouvée
            echo "<div class='carte'><img class='cas' src='" . $images[$carte] . "' alt='Carte $carte' /></div>";
        } else {
            // Sinon, afficher le dos de la carte
            echo "<button type='submit' name='carte' value='$index' class='carte'><div class='carte1'><img class='cas' src='images/can.png'/></div></button>";
        }
    }

    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Memory</title>
    <link rel="stylesheet" href="carte1.css"/>
</head>
<body>
    <div class="topmenu">
        <h1>Jeu de Memory</h1>
        <p>Tentatives : <?= $_SESSION['tentatives'] ?></p>
        <p>Paires trouvées : <?= count($_SESSION['paires']) ?></p>
    </div>
    <div class="leaderboard">
        <h2 class="leader">Leaderboard</h2>
    </div>

    <img class="fond" src="images/fond.jpg"/>

    <form method="post" class="bloccarte">
        <?php afficher_cartes($_SESSION['cartes'], $_SESSION['decouvertes'], $_SESSION['paires']); ?>
    </form>

    <form method="post" class="recom">
        <input type="submit" name="reset" value="Recommencer" class="recom1">
    </form>
</body>
</html>