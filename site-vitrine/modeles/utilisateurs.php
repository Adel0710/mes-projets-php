<?php
include_once('bdd.php');

class modeleUtilisateurs {

    function __construct(){
        $this->bdd = new bdd();
    }

    function connexion($login, $mdp) {

        $connexion = $this->bdd->connexion();

        $utilisateurs = $connexion->query("SELECT * FROM utilisateurs WHERE login = '$login' AND mdp = '$mdp'");

        foreach($utilisateurs as $utilisateur) {

            setcookie('login', $utilisateur['login']);
            setcookie('role', $utilisateur['role']);
        }
    }
}