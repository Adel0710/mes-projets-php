<?php
include_once('modeles/carte.php');

class controleurCarte {

    function __construct() {
        $this->modeleCarte = new modeleCarte();
    }

    function afficher() {

        $carte = $this->modeleCarte->afficher();

        return $carte;
    }

    function afficherParTitre($titre) {

        $carte = $this->modeleCarte->afficherParTitre($titre);

        return $carte;
    }
}