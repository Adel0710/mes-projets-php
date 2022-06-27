<?php
include_once('modeles/entrees.php');

class controleurEntrees {

    function __construct() {
        $this->modeleEntrees = new modeleEntrees();
    }

    function afficher() {

        $entrees = $this->modeleEntrees->afficher();

        return $entrees;
    }

    function creer() {

        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];

        $this->modeleEntrees->creer($titre, $description, $prix);
    }

    function supprimer() {

        $id = $_POST['id'];

        $this->modeleEntrees->supprimer($id);
    }
}