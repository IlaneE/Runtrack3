<?php

class Connexion 
{

    protected $bdd;

    public function __construct()
    {
        try {
            $this->bdd = new PDO ('mysql:host=localhost;dbname=classes','root','');
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch (PDOException $e) {
            echo "Echec de la connexion : " . $e->getMessage();
        }
    }
}




?>