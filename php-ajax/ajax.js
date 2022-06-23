function afficherMessage() { 

    // Déclaration de class Ajax
    const xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        // Affiche la réponse Ajax dans une div
        document.getElementById("resultat-ajax").innerHTML =
            this.responseText;
    }

    // Récupère le contenu du fichier "ajax-message.php"
    xhttp.open("GET", "utilisateurs.php");
    xhttp.send();

    setTimeout(function () {
        afficherMessage()
    }, 2000);
}

afficherMessage();