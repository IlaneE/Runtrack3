<?php

    require_once("Vehicule.php");

    class Train extends Vehicule {

        protected $wagons = 0;
        protected $retard = 0;
        protected $prochaineGare = "Cannes";
        protected $nombrePassagers = 0; 

        public function initialiserTrain($nombreWagon) {
            $this->name = "Mon train";
            $this->modele = "Train";
            $this->vitesseMax = 400;
            $this->roues = $nombreWagon * 10;
            $this->wagon = $nombreWagon;
        }

        public function presenterTrain() {
            echo "Train";
        }

        public function monterPassager($nbPassagers) {
            echo "Monter " . $nbPassagers . " passagers";
        }

    }

?>