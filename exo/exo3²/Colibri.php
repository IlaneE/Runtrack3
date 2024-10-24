<?php

require_once("Oiseaux.php");
require_once("Animaux.php");


class Colibri extends Oiseaux {
    


    public function __construct($nom, $taille, $poids, $alim, $peuxVoler, $estEnVol) {
        parent::__construct($nom, $taille, $poids, $alim, $peuxVoler, $estEnVol);
    }

    public function presColib() {
    echo "Son nom est : " . $this->nom . "<br><br>";
    echo "Sa taille est de : " . $this->taille . "cm<br><br>";
    echo "Son poids est de : " . $this->poids . "g<br><br>";
    echo "Son type d'alimentation est : " . $this->alim . "<br><br>";
    echo "Peut-il voler ? : " . ($this->peuxVoler ? 'Oui' : 'Non') . "<br><br>";
    echo "Est-il en vol ? : " . ($this->estEnVol ? 'Oui' : 'Non') . "<br><br><br><br>";
    }
}



?>