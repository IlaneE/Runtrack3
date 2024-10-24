<?php

require_once("Animaux.php");


class Oiseaux extends Animaux {
    protected $peuxVoler;
    protected $estEnVol;

    public function __construct($nom, $taille, $poids, $alim, $peuxVoler, $estEnVol) {
        parent::__construct($nom, $taille, $poids, $alim);
        $this->peuxVoler = boolval($peuxVoler);
        $this->estEnVol = boolval($estEnVol);
    }

    public function presentation() {
        echo "Peux Voler ? : &nbsp" . $this->peuxVoler . "<br><br>";
        echo "Est en vol ? : &nbsp" . $this->estEnVol . "<br><br><br><br>";
    }

    public function envoler($peuxVoler){
        if (gettype($peuxVoler)== "boolean"  ) {
            $this->peuxVoler = $peuxVoler;
        }
    }

    public function atterrir($estEnVol){
        if (gettype($estEnVol)== "boolean"  ) {
            $this->estEnVol = $estEnVol;
        }
    }


}



?>