<?php
include_once('bdd.php');

class modeleEntrees {

    function __construct() {

        $this->bdd = new bdd();
    }

    function afficher() {

        $connexion = $this->bdd->connexion();

        $entrees = $connexion->query("SELECT * FROM entrees");

        return $entrees;
    }

    function creer($titre, $description, $prix) {

        $connexion = $this->bdd->connexion();

        $connexion->query("INSERT INTO entrees (titre, description, prix) VALUES ('$titre','$description','$prix')");
    }

    function supprimer($id) {

        $connexion = $this->bdd->connexion();

        $connexion->query("DELETE FROM entrees WHERE id = $id");
    }
}