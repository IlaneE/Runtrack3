<?php 

require_once("Patisserie.php");

class Religieuse extends Patisserie {
    protected $S1Boule;
    protected $S2Boule;
    protected $supplementChantilly;

    public function __construct($poids, $note, $prix, $S1Boule, $S2Boule, $supplementChantilly) {
        parent::__construct($poids, $note, $prix);
        $this->S1Boule = $S2Boule;
        $this->S2Boule = $S2Boule;
        $this->supplementChantilly = $supplementChantilly;
    }

    public function afficherReligieuse() {
        echo "Saveur de la première boule: &nbsp" . $this->S1Boule . "<br><br>";
        echo "Saveur de la deuxième boule: &nbsp" . $this->S2Boule . "<br><br>";
        echo "Supplement chantilly ? : &nbsp" . ($this->supplementChantilly ? 'Oui' : 'Non') . "<br><br><br><br>";
    }

    public function changerS1Boule($S1Boule) {
        $parfum = ["choco", "vanille", "fraise", "banane"];
        if (in_array($S1Boule,$parfum)   && $S1Boule != $this->S1Boule){
            $this->S1Boule = $S1Boule;
        }
    }

    public function getS1Boule() {
        return $this->S1Boule;
    }

    public function changerS2Boule($S2Boule) {
        $parfum = ["choco", "vanille", "fraise", "banane"];
        if (in_array($S2Boule,$parfum)   && $S2Boule != $this->S2Boule){
            $this->S2Boule = $S2Boule;
        }
    }

    public function getS2Boule() {
        return $this->S2Boule;
    }

    public function setChantilly($supplementChantilly){
        if (gettype($supplementChantilly)== "boolean"  ) {
            $this->supplementChantilly = $supplementChantilly;
        }
    }

    public function getChantilly() {
        return $this->supplementChantilly;        
    }
}




?>