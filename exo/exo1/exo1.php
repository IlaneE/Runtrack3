<?php

class vetement {
    private $type;
    private $color;
    private $taille;
    private $prix;
    private $etat;


// la fonction __construct permet d'initialisé les propriétés d'un objet 

    public function __construct($type,$color,$taille,$prix,$etat){
        $this->type = $type;
        $this->color = $color;
        $this->taille = $taille;
        $this->prix = $prix;
        $this->etat = $etat;  
    }

    public function presentation(){

        echo "Type: &nbsp" . $this->type . "<br><br>";
        echo "Couleur: &nbsp" . $this->color . "<br><br>";
        echo "Taille: &nbsp" . $this->taille . "<br><br>";
        echo "Prix: &nbsp" . $this->prix . "€ <br><br>";
        echo "État: &nbsp" . $this->etat . "<br><br><br><br>";
    }

    public function modifiervetement($type,$color,$taille,$prix,$etat){
        $this->type = $type;
        $this->color = $color;
        $this->taille = $taille;
        $this->prix = $prix;
        $this->etat = $etat;
    } 



}

$monvetement = new vetement("Col","Vert","XXXXXS","56669,69","Mauvais");
$monvetement->presentation();

$monvetement->modifiervetement("T-Shirt", "Rose", "XXXXXXXXXXXL", "0,69", "Nickel");
$monvetement->presentation();


?>
