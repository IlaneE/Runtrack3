<?php

    class Vehicule {
    
        protected $name = "Mon véhicule";
        protected $modele = "Vehicule";
        protected $vitesse = 0;
        protected $vitesseMax = 200;
        protected $roues = 4;

        public function presentation() {
            echo "<br/>Présentation du " . $this->name . " - " . $this->modele . " : <br/>";
            echo "Avec ses " . $this->roues . " roues, il roule à " . $this->vitesse . " km et peut aller jusqu'à " . $this->vitesseMax . " km !<br/>";
        }

        public function accelerer() {
            $this->vitesse += 20;

            if($this->vitesse > $this->vitesseMax) $this->vitesse = $this->vitesseMax;
        }

    }

?>