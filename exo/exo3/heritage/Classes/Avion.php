<?php

    require_once("Vehicule.php");

    class Avion extends Vehicule {
    
        protected $nombreReacteurs = 4;
        protected $nombreAiles = 2;
        protected $nomPilote = "Super Laurent !";

        public function looping() {
            echo "<br/>Attention, on s'envole";
        }
    
    }

?>