<?php
$adresseBdd = "localhost:8889";
$utilisateurBdd = "root";
$mdpBdd = "root";
$nomBdd = "portfolio";

try {

    $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd . ";charset=utf8", $utilisateurBdd, $mdpBdd);
}
catch(PDOException $erreur) {

    echo "Erreur: " . $erreur->getMessage();
}

$utilisateurs = $connexion->query("SELECT * FROM utilisateurs");

echo "<ul>";
foreach($utilisateurs as $utilisateur) {

    echo "<li>
        <h3>" . $utilisateur['login']. "</h3>
    </li>";
}
echo "</ul>";