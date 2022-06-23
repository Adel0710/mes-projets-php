<?php
class bdd {
    
    /**
     * Connexion à la base de données
     */
    function connexionBdd() {

        // Informations de connexion à la bdd
        $adresseBdd = "localhost";
        $utilisateurBdd = "root";
        $mdpBdd = "";
        $nomBdd = "portfolio";

        // Connexion à la base de données
        try {

            $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd . ";charset=utf8", $utilisateurBdd, $mdpBdd);
        }
        catch(PDOException $erreur) {

            // On affiche le message d'erreur
            echo "Erreur: " . $erreur->getMessage();
        }

        return $connexion;
    }
}