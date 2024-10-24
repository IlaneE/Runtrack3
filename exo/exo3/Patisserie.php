<?php 



class Patisserie {
    protected $poids;
    protected $note;
    protected $prix;

    public function __construct($poids, $note, $prix) {
        $this->poids = $poids;
        $this->note = $note;
        $this->prix = $prix;
    }

    public function presentation() {
        echo "Poids: &nbsp" . $this->poids . "g<br><br>";
        echo "Note: &nbsp" . $this->note . "<br><br>";
        echo "Prix: &nbsp" . $this->prix . "€ <br><br><br><br>";
    }

    public function setPoids($poids) {
        
        if (is_numeric($poids )){
            $this->poids = $poids;
        }
    } 

    public function getPoids(){
        return $this->poids;
    }

    public function setPrix($prix) {
        
        if (is_numeric($prix)){
            $this->prix = $prix;
        }
    }

    public function setNote($note) {
        
        if (gettype($note)=='integer' && $note > 1 && $note <= 5 ) {
            $this->note = $note;
        }
    }


}

?>
