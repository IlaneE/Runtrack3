<?php

require_once("Félins.php");
require_once("Animaux.php");

class Lion extends Felins {
    


    public function __construct($nom, $taille, $poids, $alim, $peuxChasser) {
        parent::__construct($nom, $taille, $poids, $alim, $peuxChasser);
    }

    public function presLion() {
    echo "Son nom est : " . $this->nom . "<br><br>";
    echo "Sa taille est de : " . $this->taille . "m<br><br>";
    echo "Son poids est de : " . $this->poids . "kg<br><br>";
    echo "Son type d'alimentation est : " . $this->alim . "<br><br>";
    echo "Chasse-t'il ? : " . ($this->peuxChasser ? 'Oui' : 'Non') . "<br><br>";
    }

    public function presLion²() {
        echo "Son poids est maintenant de : " . $this->poids . "kg<br><br><br><br>";
    }
}


?>