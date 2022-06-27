<?php
include_once('bdd.php');

class modeleDesserts {

    function __construct() {

        $this->bdd = new bdd();
    }

    function afficher() {

        $connexion = $this->bdd->connexion();

        $desserts = $connexion->query("SELECT * FROM desserts");

        return $desserts;
    }

    function creer($titre, $description, $prix) {

        $connexion = $this->bdd->connexion();

        $connexion->query("INSERT INTO desserts (titre, description, prix) VALUES ('$titre','$description','$prix')");
    }

    function supprimer($id) {

        $connexion = $this->bdd->connexion();

        $connexion->query("DELETE FROM desserts WHERE id = $id");
    }
}