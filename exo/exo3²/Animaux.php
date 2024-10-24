<?php

class Animaux {
    protected $nom;
    protected $taille;
    protected $poids;
    protected $alim;

    public function __construct($nom, $taille, $poids, $alim) {
        $this->nom = $nom; 
        $this->taille = $taille; 
        $this->poids = $poids; 
        $this->alim = $alim; 
    }

    public function presentation() {
        echo "Cet animal s'apelle : " . $this->nom . "<br><br>";
        echo "Sa taille est de : " . $this->taille . "<br><br>";
        echo "Son poids est de : " . $this->poids . "<br><br>";
        echo "Son type d'ailmentation est : " . $this->alim . "<br><br><br><br>";
    }

    public function setNom($nom) {
        $name = ["autruche", "colibri", "lion", "tigre"];
        if (in_array($nom,$name)   && $nom != $this->nom){
            $this->nom = $nom;
        }
    }

    public function getNom() {
        return $this->nom;
    }

    public function setTaille($taille) {
        if (is_numeric($taille)){
            $this->taille = $taille;
        }
    }

    public function getTaile(){
        return $this->taille;
    }

    public function setPoids($poids) {
        
        if (is_numeric($poids )){
            $this->poids = $poids;
        }
    } 

    public function getPoids(){
        return $this->poids;
    }

    public function setAlim($alim) {
        $bouffe = ["carnivore", "herbivore", "omnivore"];
        if (in_array($alim,$bouffe)   && $alim != $this->alim){
            $this->alim = $alim;
        }
    }

    public function getAlim() {
        return $this->alim;
    }
}





?>