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
function afficher_cartes_decouvertes($cartes, $decouvertes, $paires) {
    $images = [
        1 => 'images/dragibus1.png',
        2 => 'images/fizz1.png',
        3 => 'images/tete1.png',
        4 => 'images/ourson1.png'
    ];

    

    foreach ($cartes as $index => $carte) {
        if (in_array($index, $decouvertes) || in_array($carte, $paires)) {
            echo "<div class='carte'><img class='cas' src='" . $images[$carte] . "' alt='Carte $carte' /></div>";
        }
    }

    
}


function afficher_cartes($cartes, $decouvertes, $paires) {
    echo "<div class='blockcarte'>";

    foreach ($cartes as $index => $carte) {
        if (!in_array($index, $decouvertes) && !in_array($carte, $paires)) {
            echo "<button type='submit' name='carte' value='$index' class='carte' id='button'><div class='carte1'><img class='cas' src='images/cas.png'/></div></button>";
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
    <style>
        .carte {
    height:150px;
    width:100px;
    background: radial-gradient(ellipse closest-side,pink, magenta);
    /* border-radius: 5px; */
    border-width:4px;
    border-style:solid;
    border-image: linear-gradient(to top right,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000) 1;
    border-radius: 5px;
    animation: carte 3000ms infinite;
    /* position:fixed; */
    padding:5px;
}
.cas {
    width:100%;
    height:100%;
    background-color:transparent;
}
@keyframes carte {
    0% { border-image: linear-gradient(to top right,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000) 1; }
    20% { border-image: linear-gradient(to top right,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff) 1; }
    40% { border-image: linear-gradient(to top right,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000) 1; }
    60% { border-image: linear-gradient(to top right,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff) 1; }
    80% { border-image: linear-gradient(to top right,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000) 1; }
    100% { border-image: linear-gradient(to top right,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff,#ff0000,#ffffff) 1; }

}
#button {
    font-size: 16px;
    /* background-color: #4CAF50; */
    color: white;
    border: none;
    cursor: pointer;
}
.recom {
    position:absolute;
    top:510px;
    right:500px;
}
.recom1 {
    background: linear-gradient(to bottom right,magenta, pink);
    border:1px solid white;
    border-radius:10px;
    padding:5px;
}
.fond {
    z-index:-6;
    margin:0px;
    position: fixed;
    top:0px;
    left:0px;
    width:100%;
    height:100%;
}
.fond-carte {
    background: linear-gradient(to bottom right,magenta, pink);
    height:450px;
    width:850px;
    position:absolute;
    top:30px;
    right:100px;
    border:1px solid white;
    border-radius:10px;
    /* opacity:95%; */
    z-index:-2;
}
.leaderboard {
    background: linear-gradient(to top left,magenta, pink);
    height:350px;
    width:200px;
    position:absolute;
    top:160px;
    left:37px;
    border:1px solid white;
    border-radius:10px;
}
.topmenu {
    background: linear-gradient(to top left,magenta, pink);
    border:1px solid white;
    border-radius:10px;
    width:230px;
    height:140px;
}
.leader {
    border-bottom:1px solid black ;
    width:140px;
    position:relative;
    left:30px;
    padding-left:5px;
}
.bloccarte {
    position:absolute;
    left:760px;
    bottom:60px;
    height:400px;
    width:500px;
}
.blockcarte {
    height:300px;
    width:400px;
    position:absolute;
}
#carte1 {
    position:absolute;
    left:500px;
    top:100px;
    width:300px;
    height:200px;
}
.blockcarte-decouvertes {
    position:absolute;
    left:330px;
    bottom: 130px;
    width:400px;
    height:400px;
}
    </style>
</head>
<body>
    <div class="topmenu">
        <h1>Jeu de Memory</h1>
        <p>Tentatives : <?= $_SESSION['tentatives'] ?></p>
        <p>Paires trouvées : <?= count($_SESSION['paires']) ?></p>
    </div>

    <img class="fond" src="images/bonbon_fond3.jpg"/>
    <div class="leaderboard"><h2 class="leader">Leaderboard</h2></div>
    <div class="fond-carte"></div>

    <form method="post" class="bloccarte">
        <?php afficher_cartes($_SESSION['cartes'], $_SESSION['decouvertes'], $_SESSION['paires']); ?>
    </form>

    <div class="blockcarte-decouvertes">
        <?php afficher_cartes_decouvertes($_SESSION['cartes'], $_SESSION['decouvertes'], $_SESSION['paires']); ?>
    </div>

    <form method="post" class="recom">
        <input type="submit" name="reset" value="Recommencer" class="recom1">
    </form>
</body>
</html>