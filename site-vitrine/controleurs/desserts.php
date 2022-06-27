<?php
include_once('modeles/desserts.php');

class controleurDesserts {

    function __construct() {
        $this->modeleDesserts = new modeleDesserts();
    }

    function afficher() {

        $desserts = $this->modeleDesserts->afficher();

        return $desserts;
    }

    function creer() {

        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];

        $this->modeleDesserts->creer($titre, $description, $prix);
    }

    function supprimer() {

        $id = $_POST['id'];

        $this->modeleDesserts->supprimer($id);
    }
}