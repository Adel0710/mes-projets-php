<?php
include_once('bdd.php');

class modeleCarte {

    function __construct(){
        $this->bdd = new bdd();
    }

    function afficher() {

        $connexion = $this->bdd->connexion();

        $carte = $connexion->query("SELECT * FROM carte");

        return $carte;
    }

    function afficherParTitre($titre) {

        $connexion = $this->bdd->connexion();

        $carte = $connexion->query("SELECT * FROM carte WHERE titre = '$titre'");

        return $carte;
    }
}