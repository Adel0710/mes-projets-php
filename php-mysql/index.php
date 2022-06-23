<?php
include_once('controleurs/utilisateurs.php');

class routeur
{
    function __construct()
    {
        $this->controleurUtilisateurs = new controleurUtilisateurs();
    }

    function routes()
    {

        // On récupère le nom de la page en paramètre d'url
        $page = $_GET['page'];

        if ($page == "utilisateur") {

            // On récupère un utilisateur par login
            $utilisateurs = $this->controleurUtilisateurs->AfficherUtilisateurParLogin();

            // On affiche la vue
            include_once('vues/utilisateur.php');
        } 
        else if($page == "modifier-utilisateur") {

            if($_POST['modifier-utilisateur']) {
                
                $this->controleurUtilisateurs->modifierUtilisateur();
            }

            // On récupère un utilisateur par login
            $utilisateurs = $this->controleurUtilisateurs->AfficherUtilisateurParLogin();

            include_once('vues/modifier-utilisateur.php');
        }
        else {

            if(isset($_POST['supprimer-utilisateur'])) {

                $this->controleurUtilisateurs->supprimerUtilisateur();
            }

            // On récupère les utilisateurs
            $utilisateurs = $this->controleurUtilisateurs->AfficherUtilisateurs();

            if(isset($_POST['inscription'])) {

                $this->controleurUtilisateurs->inscription();
            }

            // On affiche la vue
            include_once('vues/accueil.php');
        }
    }
}

$routeur = new routeur();

$routeur->routes();
