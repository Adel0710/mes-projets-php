<?php
include_once('bdd.php');

class modelePlats {

    function __construct() {

        $this->bdd = new bdd();
    }

    function afficher() {

        $connexion = $this->bdd->connexion();

        $plats = $connexion->query("SELECT * FROM plats");

        return $plats;
    }

    function creer($titre, $description, $prix) {

        $connexion = $this->bdd->connexion();

        $connexion->query("INSERT INTO plats (titre, description, prix) VALUES ('$titre','$description','$prix')");
    }

    function supprimer($id) {

        $connexion = $this->bdd->connexion();

        $connexion->query("DELETE FROM plats WHERE id = $id");
    }
}