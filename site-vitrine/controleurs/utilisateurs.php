<?php
include_once('modeles/utilisateurs.php');

class controleurUtilisateurs {

    function __construct() {
        $this->modeleUtilisateurs = new modeleUtilisateurs();
    }

    function connexion() {

        $login = $_POST['login'];

        $mdp = $_POST['mdp'];

        $this->modeleUtilisateurs->connexion($login, $mdp);
    }
}