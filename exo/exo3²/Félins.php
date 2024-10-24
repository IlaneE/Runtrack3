<?php

require_once("Animaux.php");


class Felins extends Animaux {
    protected $peuxChasser = true;

    public function __construct($nom, $taille, $poids, $alim, $peuxChasser) {
        parent::__construct($nom, $taille, $poids, $alim);
        $this->peuxChasser = boolval($peuxChasser);
    }

    public function presentation() {
        echo "Chasse-t'il ? : &nbsp" . $this->chasse . "<br><br><br><br>";
    }

    public function chasse(){
        if($this->peuxChasser) {
            echo "Le félin chasse <br><br>";
            $this->poids += 5;
        } else {
            echo "Ce félin ne peux pas chasser <br><br>";
        }
    }

}



?>
