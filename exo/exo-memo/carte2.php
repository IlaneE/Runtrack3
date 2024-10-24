<?php
session_start();

if (!isset($_SESSION['cartes'])) {
    // Initialisation des cartes
    $cartes = range(1, 8);
    $cartes = array_merge($cartes, $cartes); // Dupliquer les cartes
    shuffle($cartes); // Mélanger les cartes

    $_SESSION['cartes'] = $cartes; // Stocker les cartes mélangées dans la session
    $_SESSION['revelees'] = array_fill(0, 16, false); // État des cartes révélées
    $_SESSION['coupleTrouve'] = 0; // Compteur pour les couples trouvés
}

$cartes = $_SESSION['cartes'];
$revelees = $_SESSION['revelees'];
$coupleTrouve = $_SESSION['coupleTrouve'];

// Vérification de la carte sélectionnée
if (isset($_GET['carte_id'])) {
    $carte_id = intval($_GET['carte_id']);
    $revelees[$carte_id] = true;

    // Vérification des cartes révélées
    $cartesRevelees = array_keys(array_filter($revelees));
    if (count($cartesRevelees) == 2) {
        if ($cartes[$cartesRevelees[0]] == $cartes[$cartesRevelees[1]]) {
            $coupleTrouve++;
        } else {
            // Attendre 2 secondes avant de cacher les cartes (via refresh)
            header("Refresh: 2; url=carte2.php");
            $revelees[$cartesRevelees[0]] = false;
            $revelees[$cartesRevelees[1]] = false;
        }
    }

    $_SESSION['revelees'] = $revelees;
    $_SESSION['coupleTrouve'] = $coupleTrouve;
}

// Vérification si le jeu est terminé
$jeuTermine = $coupleTrouve == 8;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu de Memory</title>
    <style>
        .carte {
            width: 100px;
            height: 100px;
            display: inline-block;
            border: 1px solid #000;
            margin: 5px;
            text-align: center;
            line-height: 100px;
            font-size: 24px;
            cursor: pointer;
            background-color: #ccc;
        }
        .revelee {
            background-color: #fff;
        }
    </style>
</head>
<body>

<h1>Jeu de Memory</h1>
<?php if ($jeuTermine): ?>
    <h2>Bravo! Vous avez trouvé tous les couples!</h2>
    <a href="carte2.php">Rejouer</a>
<?php else: ?>
    <div>
        <?php foreach ($cartes as $i => $valeur): ?>
            <a href="?carte_id=<?= $i ?>" class="carte <?= $revelees[$i] ? 'revelee' : '' ?>">
                <?= $revelees[$i] ? $valeur : '?' ?>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

</body>
</html>
