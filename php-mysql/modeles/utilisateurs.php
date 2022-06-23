<?php
include_once('bdd.php');

class modeleUtilisateurs {

    function __construct() {
        $this->bdd = new bdd();
    }

    /**
     * Récupération des utilisateurs
     */
    function AfficherUtilisateurs() {

        // Connexion à la bdd
        $connexion = $this->bdd->connexionBdd();

        // Exécution de la requête SQL
        $utilisateurs = $connexion->query("SELECT * FROM utilisateurs");

        return $utilisateurs;
    }

    /**
     * Récupération d'un utilisateur par login
     */
    function AfficherUtilisateurParLogin($login) {

        // Connexion à la bdd
        $connexion = $this->bdd->connexionBdd();

        // On éxécute la requête SQL
        $utilisateurParLogin = $connexion->query("SELECT * FROM utilisateurs WHERE login = '$login'"); 

        return $utilisateurParLogin;
    }

    function inscription() {

        // Connexion à la bdd
        $connexion = $this->bdd->connexionBdd();

        $login = $_POST['login'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $connexion->query("INSERT INTO utilisateurs (login, email, mdp) VALUES ('$login','$email','$mdp')");
    }

    function modifierUtilisateur() {

        $connexion = $this->bdd->connexionBdd();

        $login = $_POST['login'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $id = $_POST['id'];

        $connexion->query("UPDATE utilisateurs SET login = '$login', email = '$email', mdp = '$mdp' WHERE id = $id");
    }

    function supprimerUtilisateur() {

        $connexion = $this->bdd->connexionBdd();

        $id = $_POST['id'];

        $connexion->query("DELETE FROM utilisateurs WHERE id = $id");
    }
}