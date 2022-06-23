<?php
include_once('modeles/utilisateurs.php');

class controleurUtilisateurs {

    function __construct() {
        $this->modeleUtilisateurs = new modeleUtilisateurs();
    }

    /**
     * Récupération des utilisateurs
     */
    function AfficherUtilisateurs() {

        // On éxécute le modèle
        $utilisateurs = $this->modeleUtilisateurs->AfficherUtilisateurs();

        return $utilisateurs;
    }

    /**
     * Récupération d'un utilisateur par login
     */
    function AfficherUtilisateurParLogin() {

        // On récupère le login en paramètre d'url
        $login = $_GET['login'];

        // On éxécute le modèle
        $utilisateurParLogin = $this->modeleUtilisateurs->AfficherUtilisateurParLogin($login);

        return $utilisateurParLogin;
    }

    function inscription() {

        $this->modeleUtilisateurs->inscription();
    }

    function modifierUtilisateur() {

        $this->modeleUtilisateurs->modifierUtilisateur();
    }

    function supprimerUtilisateur() {

        $this->modeleUtilisateurs->supprimerUtilisateur();
    }
}