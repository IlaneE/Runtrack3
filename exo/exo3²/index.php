<?php 

require_once("Animaux.php");
require_once("Oiseaux.php");
require_once("Autruche.php");
require_once("Colibri.php");
require_once("Félins.php");
require_once("Lion.php");
require_once("Tigre.php");

?><p class="warn">Heritage - Animaux </p><p class="rainbow-text"><?php
echo "Voici un 1er animal à vous présenter <br><br><br>";
$autruche = new Autruche("Autruche", 2.50, 75, "herbivore", false, false);
$autruche->presAutru();

echo "Voici un 2eme animal à vous présenter <br><br><br>";
$lion = new Lion("Lion", 2, 190, "carnivore", true);
$lion->presLion();
$lion->chasse();
$lion->presLion²();

echo "Voici un 3eme animal à vous présenter <br><br><br>";
$colibri = new Colibri("Colibri", 5, 1.71, "herbivore", true, true);
$colibri->presColib();

echo "Voici un 4eme animal à vous présenter <br><br><br>";
$tigre = new Tigre("Tigre", 1.9, 174, "carnivore", true);
$tigre->presTigre();
$tigre->chasse();
$tigre->presTigre²();
?>
</p>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css"/>
</head>
<body>
<!-- <img class="fond" src="images/bobgoofy.jpg"/> -->
 <p class="warn">FIN</p>
</body>
</html>