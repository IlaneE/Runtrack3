<?php

require_once("Eclair.php");
require_once("Religieuse.php");
require_once("Patisserie.php");



echo "Voici notre Eclair du jour <br><br><br>";
$eclair = new Eclair(400, 3, 5, "choco", "choco", 30);
$eclair->afficherEclair();
$eclair->changerCreme("fraise");
echo "Nouvelle creme " . $eclair->getSaveurCreme() . "<br><br>";
$eclair->changerGlacage("vanille");
echo "Nouveau glaçage " . $eclair->getSaveurglacage() . "<br><br>";
$eclair->setLongueur(50);
echo "Nouvelle longueur " . $eclair->getLongueur() . "cm<br><br>";
// $patisserie = new Patisserie(400, 3, 5);
// $patisserie->presentation();
// $patisserie->setPoids(500);
// echo "Nouveau poids " . $patisserie->getPoids() . "<br><br>";

echo "<br> Voici notre Religieuse du jour <br><br><br>";
$religieuse = new Religieuse(450, 4, 6.49, "choco", "vanille", false);
$religieuse->afficherReligieuse();
$religieuse->changerS1Boule("fraise");
echo "Nouvelle creme " . $religieuse->getS1Boule() . "<br><br>";
$religieuse->changerS2Boule("banane");
echo "Nouveau glaçage " . $religieuse->getS2Boule() . "<br><br>";
$religieuse->setChantilly(true);
echo "Chantilly ? : " . ($religieuse->getChantilly() ? 'Oui' : 'Non') . "<br><br>"
// $patisserie2 = new Patisserie(450, 4, 6.49);
// $patisserie2->presentation();
// $patisserie2->setPoids(550);
// echo "Nouveau poids " . $patisserie2->getPoids() . "<br><br>";

?>