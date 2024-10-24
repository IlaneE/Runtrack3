<?php

    require("Classes/Train.php");
    require("Classes/Voiture.php");
    require("Classes/Avion.php");

    $voitureNour = new Voiture();
    $avionLaurent = new Avion();
    $trainGaelick = new Train();

    $voitureNour->presentation();
    $voitureNour->accelerer();
    $voitureNour->accelerer();
    $voitureNour->accelerer();
    $voitureNour->presentation();
    $voitureNour->deraper();

    $avionLaurent->presentation();
    $avionLaurent->looping();

    $trainGaelick->initialiserTrain(10);
    $trainGaelick->presentation();
    $trainGaelick->monterPassager(50);

    echo "Fin du programme !";

?>