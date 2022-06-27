<?php
include_once('controleurs/entrees.php');
include_once('controleurs/plats.php');
include_once('controleurs/desserts.php');
include_once('controleurs/utilisateurs.php');
include_once('controleurs/carte.php');

class routeur {

    function __construct() {
        $this->controleurEntrees = new controleurEntrees();
        $this->controleurPlats = new controleurPlats();
        $this->controleurDesserts = new controleurDesserts();
        $this->controleurUtilisateurs = new controleurUtilisateurs();
        $this->controleurCarte = new controleurCarte();
    }

    function afficherVue() {

        $url = $_GET['page'];

        if($url == 'admin') {

            if($_POST['supprimer-entree']) {

                $this->controleurEntrees->supprimer();
            }

            if($_POST['supprimer-plat']) {

                $this->controleurPlats->supprimer();
            }

            if($_POST['supprimer-dessert']) {

                $this->controleurDesserts->supprimer();
            }

            if($_POST['creer-entree']) {

                $this->controleurEntrees->creer();
            }

            if($_POST['creer-plat']) {

                $this->controleurPlats->creer();
            }

            if($_POST['creer-dessert']) {

                $this->controleurPlats->creer();
            }

            $entrees = $this->controleurEntrees->afficher();
            $plats = $this->controleurPlats->afficher();
            $desserts = $this->controleurDesserts->afficher();

            include_once('vues/admin.php');
        }
        else if($url == 'connexion') {

            if($_POST['connexion']) {

                $this->controleurUtilisateurs->connexion();
            }

            include_once('vues/connexion.php');
        }
        else if($url == 'entrees') {

            $carte = $this->controleurCarte->afficherParTitre('Nos entrées');
            $entrees = $this->controleurEntrees->afficher();

            include_once('vues/entrees.php');
        }
        else if($url == 'plats') {

            $carte = $this->controleurCarte->afficherParTitre('Nos plats');
            $plats = $this->controleurPlats->afficher();

            include_once('vues/plats.php');
        }
        else if($url == 'desserts') {

            $carte = $this->controleurCarte->afficherParTitre('Nos desserts');
            $desserts = $this->controleurDesserts->afficher();

            include_once('vues/desserts.php');
        }       
        else {

            $carte = $this->controleurCarte->afficher();

            include_once('vues/accueil.php');
        }
    }
}

$routeur = new routeur();

$routeur->afficherVue();