<?php

class TasseDeThe {
    private $quantiteActuelle;
    private $quantiteMaximum;
    private $estChaud;

    public function __construct($quantiteMaximum, $estChaud = true) {
        $this->quantiteMaximum = $quantiteMaximum;
        $this->quantiteActuelle = $quantiteMaximum;
        $this->estChaud = $estChaud;
    }

    public function afficherTasse() {
        echo "Quantité actuelle: {$this->quantiteActuelle} ml<br><br>";
        echo "Quantité maximum: {$this->quantiteMaximum} ml<br><br>";
        echo "Est chaud: " . ($this->estChaud ? 'Oui' : 'Non') . "<br><br><br><br>";
    }

    public function boire() {
        $this->quantiteActuelle = 0;
    }

    public function remplir() {
        $this->quantiteActuelle = $this->quantiteMaximum;
    }

    public function chaleurvide() {
        $this->estChaud = false;
    }

    public function chaleurplein() {
        $this->estChaud = true;
    }
}

$tasse = new TasseDeThe(1000);
$tasse->afficherTasse();
$tasse->boire();
$tasse->chaleurvide();
$tasse->afficherTasse();
$tasse->remplir();
$tasse->chaleurplein();
$tasse->afficherTasse();
?>