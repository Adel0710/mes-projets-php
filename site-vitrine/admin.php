<!DOCTYPE html>
<html>
    <head>
        <title>Exo 4 - Site vitrine</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="css/styles.css" type="text/css" rel="stylesheet">
    </head>
    <body>

        <?php
        $adresseBdd = "localhost:8889";
        $utilisateurBdd = "root";
        $mdpBdd = "root";
        $nomBdd = "restaurant";

        try {

            $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd . ";charset=utf8", $utilisateurBdd, $mdpBdd);
        }
        catch(PDOException $erreur) {

            echo "Erreur: " . $erreur->getMessage();
        }
        ?>

        <?php
        if($_POST['creer-entree']) {

            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $prix = $_POST['prix'];

            $connexion->query("INSERT INTO entrees (titre, description, prix) VALUES ('$titre','$description','$prix')");
        }

        if($_POST['creer-plat']) {

            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $prix = $_POST['prix'];

            $connexion->query("INSERT INTO plats (titre, description, prix) VALUES ('$titre','$description','$prix')");
        }

        if($_POST['creer-dessert']) {

            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $prix = $_POST['prix'];

            $connexion->query("INSERT INTO desserts (titre, description, prix) VALUES ('$titre','$description','$prix')");
        }


        if($_POST['supprimer-entree']) {

            $id = $_POST['id'];

            $connexion->query("DELETE FROM entrees WHERE id = $id");
        }

        if($_POST['supprimer-plat']) {

            $id = $_POST['id'];

            $connexion->query("DELETE FROM plats WHERE id = $id");
        }

        if($_POST['supprimer-dessert']) {

            $id = $_POST['id'];

            $connexion->query("DELETE FROM desserts WHERE id = $id");
        }
        ?>

        <header class="rouge pr-5 pb-3 pt-3 pl-5 row align-items-center">
            <h1 class="col-3">Resto'</h1>
            <nav class="col-9">
                <ul class="row">
                    <li class="ml-3 mr-3">
                        <a>Accueil</a>
                    </li>
                    <li class="ml-3 mr-3">
                        <a>Notre carte</a>
                    </li>
                    <li class="ml-3 mr-3">
                        <a>Contact</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <section>
                <div class="container p-3">
                    <h2>Administration</h2>
                    <br>
                    <br>
                </div>
            </section>
            <section>
                <div class="container p-3">
                    <h3>Entrées</h3>

                    <ul class="row">
                        <li class="col-3 pt-3 pb-3">
                            <strong>Titre</strong>
                        </li>
                        <li class="col-3 pt-3 pb-3">
                            <strong>Description</strong>
                        </li>
                        <li class="col-3 pt-3 pb-3">
                            <strong>Prix</strong>
                        </li>
                    </ul>

                    <?php
                    $entrees = $connexion->query("SELECT * FROM entrees");

                    echo "<ul class='row'>";
                    foreach($entrees as $entree) {

                        echo "<li class='col-3 border-bottom border-white  pt-3 pb-3'>
                            " . $entree['titre']. "
                        </li>
                        <li class='col-3 border-bottom border-white  pt-3 pb-3'>
                            " . $entree['description']. "
                        </li>
                        <li class='col-3 border-bottom border-white  pt-3 pb-3'>
                            " . $entree['prix']. "
                        </li>
                        <li class='col-3 border-bottom border-white  pt-3 pb-3'>
                            <form method='POST'>
                                <input type='hidden' name='id' value='" . $entree['id'] . "'>
                                <input type='submit' name='supprimer-entree' value='Supprimer' class='btn btn-danger'>
                            </form>
                        </li>";
                    }
                    echo "</ul>";
                    ?>
                    <br>
                    <br>

                    <form method="POST">

                        <h3>Créer une entrée</h3>
                        <ul class="row">
                            <li class="col-4">
                                <input type="text" name="titre" placeholder="Titre" class="form-control">
                            </li>
                            <li class="col-4">
                                <input type="text" name="description" placeholder="Description" class="form-control">
                            </li>
                            <li class="col-4">
                                <input type="number" name="prix" placeholder="Prix" class="form-control">
                            </li>
                        </ul>
                        <br>
                        <input type="submit" name="creer-entree" value="Créer l'entrée" class="btn btn-primary">
                    </form>
                    <?php
                    
                    ?>
                </div>
                <div class="container p-3">
                    <h3>Plats</h3>

                    <ul class="row">
                        <li class="col-3 pt-3 pb-3">
                            <strong>Titre</strong>
                        </li>
                        <li class="col-3 pt-3 pb-3">
                            <strong>Description</strong>
                        </li>
                        <li class="col-3 pt-3 pb-3">
                            <strong>Prix</strong>
                        </li>
                    </ul>

                    <?php
                    $plats = $connexion->query("SELECT * FROM plats");

                    echo "<ul class='row'>";
                    foreach($plats as $plat) {

                        echo "<li class='col-3 border-bottom border-white'>
                            " . $plat['titre']. "
                        </li>
                        <li class='col-3 border-bottom border-white'>
                            " . $plat['description']. "
                        </li>
                        <li class='col-3 border-bottom border-white'>
                            " . $plat['prix']. "
                        </li>
                        <li class='col-3 border-bottom border-white  pt-3 pb-3'>
                            <form method='POST'>
                                <input type='hidden' name='id' value='" . $plat['id'] . "'>
                                <input type='submit' name='supprimer-plat' value='Supprimer' class='btn btn-danger'>
                            </form>
                        </li>";
                    }
                    echo "</ul>";
                    ?>
                    <br>
                    <br>

                    <form method="POST">

                        <h3>Créer un plat</h3>
                        <ul class="row">
                            <li class="col-4">
                                <input type="text" name="titre" placeholder="Titre" class="form-control">
                            </li>
                            <li class="col-4">
                                <input type="text" name="description" placeholder="Description" class="form-control">
                            </li>
                            <li class="col-4">
                                <input type="number" name="prix" placeholder="Prix" class="form-control">
                            </li>
                        </ul>
                        <br>
                        <input type="submit" name="creer-plat" value="Créer le plat" class="btn btn-primary">
                    </form>
                    <?php
                    
                    ?>
                </div>
                <div class="container p-3">
                    <h3>Desserts</h3>

                    <ul class="row">
                        <li class="col-3 pt-3 pb-3">
                            <strong>Titre</strong>
                        </li>
                        <li class="col-3 pt-3 pb-3">
                            <strong>Description</strong>
                        </li>
                        <li class="col-3 pt-3 pb-3">
                            <strong>Prix</strong>
                        </li>
                    </ul>

                    <?php
                    $desserts = $connexion->query("SELECT * FROM desserts");

                    echo "<ul class='row'>";
                    foreach($desserts as $dessert) {

                        echo "<li class='col-3 border-bottom border-white'>
                            " . $dessert['titre']. "
                        </li>
                        <li class='col-3 border-bottom border-white'>
                            " . $dessert['description']. "
                        </li>
                        <li class='col-3 border-bottom border-white'>
                            " . $dessert['prix']. "
                        </li>
                        <li class='col-3 border-bottom border-white  pt-3 pb-3'>
                            <form method='POST'>
                                <input type='hidden' name='id' value='" . $dessert['id'] . "'>
                                <input type='submit' name='supprimer-dessert' value='Supprimer' class='btn btn-danger'>
                            </form>
                        </li>";
                    }
                    echo "</ul>";
                    ?>
                    <br>
                    <br>

                    <form method="POST">

                        <h3>Créer un dessert</h3>
                        <ul class="row">
                            <li class="col-4">
                                <input type="text" name="titre" placeholder="Titre" class="form-control">
                            </li>
                            <li class="col-4">
                                <input type="text" name="description" placeholder="Description" class="form-control">
                            </li>
                            <li class="col-4">
                                <input type="number" name="prix" placeholder="Prix" class="form-control">
                            </li>
                        </ul>
                        <br>
                        <input type="submit" name="creer-dessert" value="Créer le dessert" class="btn btn-primary">
                    </form>
                    <?php
                    
                    ?>
                </div>
            </section>
        </main>

        <footer class="rouge pr-5 pb-3 pt-3 pl-5">
            <div class="row justify-content-between">
                <h1 class="col-3">O'Resto</h1>
                <div class="col-4">
                    <h3>Liens utiles</h3>
                    <ul>
                        <li>
                            <a>Nous contacter</a>
                        </li>
                        <li>
                            <a>En savoir +</a>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <h3>Réseaux sociaux</h3>
                    <ul>
                        <li>
                            <a>Facebook</a>
                        </li>
                        <li>
                            <a>Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
