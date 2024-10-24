<?php

    require_once("Vehicule.php");

    class Voiture extends Vehicule {
    
        protected $coffre = 20;
        protected $nombreSieges = 5;
        protected $roueSecours = true;

        public function deraper() {
            echo "<br/>Accrochez vos ceintures dans " . $this->name;
        }

    }

?>