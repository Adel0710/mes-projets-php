<?php
class bdd {

    function connexion() {

        $adresseBdd = "localhost";
        $utilisateurBdd = "root";
        $mdpBdd = "";
        $nomBdd = "restaurant";

        try {

            $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd . ";charset=utf8", $utilisateurBdd, $mdpBdd);
        }
        catch(PDOException $erreur) {

            echo "Erreur: " . $erreur->getMessage();
        }

        return $connexion;
    }
}