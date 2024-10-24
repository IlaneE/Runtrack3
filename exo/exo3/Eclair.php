<?php

require_once("Patisserie.php");

class Eclair extends Patisserie {
    protected $saveurCreme;
    protected $saveurGlacage;
    protected $longueur;

    public function __construct($poids, $note, $prix, $saveurCreme, $saveurGlacage, $longueur) {
        parent::__construct($poids, $note, $prix);
        $this->saveurCreme = $saveurCreme;
        $this->saveurGlacage = $saveurGlacage;
        $this->longueur = $longueur;
    }

    public function afficherEclair() {
        $this->presentation();
        echo "Saveur de la creme: &nbsp" . $this->saveurCreme . "<br><br>";
        echo "Saveur du glaçage: &nbsp" . $this->saveurGlacage . "<br><br>";
        echo "La longueur est de: &nbsp" . $this->longueur . "cm<br><br><br><br>";
    }

    public function changerCreme($saveurCreme) {
        $parfum = ["choco", "vanille", "fraise", "bannane"];
        if (in_array($saveurCreme,$parfum)   && $saveurCreme != $this->saveurCreme){
            $this->saveurCreme = $saveurCreme;
        }
    }

    public function getSaveurCreme() {
        return $this->saveurCreme;
    }

    public function changerGlacage($saveurGlacage) {
        $parfum = ["choco", "vanille", "fraise", "bannane"];
        if (in_array($saveurGlacage,$parfum)   && $saveurGlacage != $this->saveurGlacage){
            $this->saveurGlacage = $saveurGlacage;
        }
    }

    public function getSaveurGlacage() {
        return $this->saveurGlacage;
    }

    public function setLongueur($longueur) {
        if (is_numeric($longueur)){
            $this->longueur = $longueur;
        }
    }

    public function getLongueur(){
        return $this->longueur;
    }
}


?>