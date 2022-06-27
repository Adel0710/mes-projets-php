<?php
include_once('modeles/plats.php');

class controleurPlats {

    function __construct() {
        $this->modelePlats = new modelePlats();
    }

    function afficher() {

        $plats = $this->modelePlats->afficher();

        return $plats;
    }

    function creer() {

        $titre = $_POST['titre'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];

        $this->modelePlats->creer($titre, $description, $prix);
    }
    
    function supprimer() {

        $id = $_POST['id'];

        $this->modelePlats->supprimer($id);
    }
}