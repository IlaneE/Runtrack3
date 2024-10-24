<?php
session_start();

// Vérifie si le jeu doit être réinitialisé
if (isset($_POST['reset'])) {
    session_destroy();
    session_start();
}

// Initialise le jeu si ce n'est pas déjà fait
if (!isset($_SESSION['cartes'])) {
    $cartes = range(1, 4);
    $cartes = array_merge($cartes, $cartes);
    shuffle($cartes);
    $_SESSION['cartes'] = $cartes;
    $_SESSION['decouvertes'] = [];
    $_SESSION['tentatives'] = 0;
    $_SESSION['paires'] = [];
}

// Gère les clics sur les cartes
if (isset($_POST['carte'])) {
    $index = (int)$_POST['carte'];
    if (!in_array($index, $_SESSION['decouvertes']) && count($_SESSION['decouvertes']) < 2) {
        $_SESSION['decouvertes'][] = $index;
        $_SESSION['tentatives']++;

        // Vérifie si deux cartes sont découvertes
        if (count($_SESSION['decouvertes']) === 2) {
            $firstCard = $_SESSION['cartes'][$_SESSION['decouvertes'][0]];
            $secondCard = $_SESSION['cartes'][$_SESSION['decouvertes'][1]];

            if ($firstCard === $secondCard) {
                $_SESSION['paires'][] = $firstCard;
            }

            // Réinitialise les découvertes après un petit délai (pour un vrai jeu, vous pourriez vouloir utiliser JavaScript)
            // En attendant, réinitialise immédiatement pour simplifier le jeu
            $_SESSION['decouvertes'] = [];
        }
    }
}

// Fonction pour afficher les cartes
function afficher_cartes($cartes, $decouvertes, $paires) {

    // Tableau associatif pour les images
    $images = [
        1 => 'images/dragibus1.png',
        2 => 'images/fizz1.png',
        3 => 'images/tete1.png',
        4 => 'images/ourson1.png'
    ];

    ?> <div class="blockcarte"><?php

    foreach ($cartes as $index => $carte) {
        if (in_array($index, $decouvertes) || in_array($carte, $paires)) {
            echo "<div class='carte'><img class='cas' src='" . $images[$carte] . "' alt='Carte $carte' /></div>";
        } else {
            echo "<button type='submit' name='carte' value='$index' class='carte' id='button'><div class='carte1'><img class='cas' src='images/cas.png'/></div></button>";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu de Memory</title>
    <link rel="stylesheet" href="carte1.css"/>
    <!-- <style>
        .carte {
            height:150px;
            width:100px;
            background: radial-gradient(ellipse closest-side,pink, magenta);
            /* border-radius: 5px; */
            border-width:4px;
            border-style:solid;
            border-radius: 5px;
            animation: carte 3000ms infinite;
            }
    </style> -->
</head>
<body>
    <div class="topmenu">
    <h1>Jeu de Memory</h1>
    <p>Tentatives : <?= $_SESSION['tentatives'] ?></p>
    <p>Paires trouvées : <?= count($_SESSION['paires']) ?></p>
    </div>

    <img class="fond" src="images/bonbon_fond3.jpg"/>
    <div class="leaderboard"><h2 class="leader">Leaderboard</h2></div>
    <div class="fond-carte">
    </div>


    <form method="post" class="bloccarte">
        <?php afficher_cartes($_SESSION['cartes'], $_SESSION['decouvertes'], $_SESSION['paires']); ?>
    </form>

    <form method="post" class="recom">
        <input type="submit" name="reset" value="Recommencer" class="recom1">
    </form>
</body>
</html>