<!DOCTYPE html>
<html>
    <head>
        <title>Portofolio</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>

        <header class="p-3 bg-purple">
            <h1>Portfolio</h1>
        </header>

        <?php
        // Si le cookie login existe
        if(isset($_COOKIE['login'])) {
        ?>

        <main>
            <section class="container p-3 mt-3 mb-3 bg-white">
                <!-- Formulaire de création de portfolio -->
                <form method="POST">
                    <h2>Créer un portfolio</h2>

                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="prenom" placeholder="Prénom" class="mb-3 form-control">
                        </div>
                        <div class="col-6">
                            <input type="text" name="nom" placeholder="Nom" class="mb-3 form-control">
                        </div>
                        <div class="col-6">
                            <input type="number" name="age" placeholder="Age" class="mb-3 form-control">
                        </div>
                        <div class="col-6">
                            <input type="text" name="ville" placeholder="Ville" class="mb-3 form-control">
                        </div>
                    </div>
                    <textarea name="description" class="mb-3 form-control"></textarea>
                    <input type="text" name="experience1" placeholder="Expérience 1" class="mb-3 form-control">
                    <input type="text" name="experience2" placeholder="Expérience 2" class="mb-3 form-control">

                    <input type="text" name="competence1" placeholder="Compétence 1" class="mb-3 form-control">
                    <input type="number" name="niveau_competence1" placeholder="Niveau compétence 1 (en %)" class="mb-3 form-control">
                    <input type="text" name="competence2" placeholder="Compétence 2" class="mb-3 form-control">
                    <input type="number" name="niveau_competence2" placeholder="Niveau compétence 2 (en %)" class="mb-3 form-control">
                    <input type="text" name="competence3" placeholder="Compétence 3" class="mb-3 form-control">
                    <input type="number" name="niveau_competence3" placeholder="Niveau compétence 3 (en %)" class="mb-3 form-control">

                    <input type="submit" name="creer" value="Créer" class="btn btn-primary">
                </form>
            </section>

            <?php            
            if(isset($_POST['creer'])) {

                // Stockage des données du portfolio en cookie
                setcookie($_POST['prenom'], json_encode($_POST));

                header('Location: index.php');
            }

            if(isset($_POST['supprimer-portfolio'])) {

                unset($_COOKIE[$_POST['prenom']]);

                setcookie($_POST['prenom'], "", time() - 3600);

                header('Location: index.php');
            }
            ?>

            <section class="p-3 mb-3 container bg-white">
                <form>
                    <h2>Rechercher un portfolio</h2>
                    <input type="text" name="prenom" placeholder="Prénom" class="mb-3 form-control">
                    <input type="submit" name="rechercher" value="Rechercher" class="btn btn-primary">
                </form>
            </section>

            <section class="container">
                <h2>Portfolios (<?php echo count($_COOKIE) - 1; ?>)</h2>
                <ul class="row">
                    <?php
                    // On parcours tous les cookies
                    foreach($_COOKIE as $cookie) {

                        // On récupère le tableau du portfolio
                        $portfolio = json_decode($cookie, true);

                        // Si la clé "prenom" existe
                        if(isset($portfolio['prenom'])) {

                            // Si le critère de recherche "prenom" existe
                            if(isset($_GET['prenom'])) {

                                // Si le prénom d'un portfolio match avec le critère de recherche "prenom"
                                if($_GET['prenom'] == $portfolio['prenom']) {
                                ?>
                                    
                                    <li class="col-4">
                                        <article class="card">
                                            <div class="card-body">
                                                <?php                                        
                                                echo "<a href='portfolio.php?prenom=" . $portfolio['prenom'] . "'>" . $portfolio['prenom'] . " " . $portfolio['nom'] . "</a>";
                                                ?>
                                                <a href="modifier-portfolio.php?prenom=<?php echo $portfolio['prenom']; ?>">Modifier</a>
                                            </div>
                                        </article>
                                    </li>

                                    <?php
                                }
                            }
                            else {
                            ?>

                                <li class="col-4">
                                    <article class="card">
                                        <div class="card-body">
                                            <?php                                        
                                            echo "<a href='portfolio.php?prenom=" . $portfolio['prenom'] . "'>" . $portfolio['prenom'] . " " . $portfolio['nom'] . "</a>";
                                            ?>
                                            <br>
                                            <a href="modifier-portfolio.php?prenom=<?php echo $portfolio['prenom']; ?>" class="btn btn-primary">Modifier</a>

                                            <form method="POST">
                                                <input type="hidden" name="prenom" value="<?php echo $portfolio['prenom']; ?>">
                                                <input type="submit" name="supprimer-portfolio" value="Supprimer" class="btn btn-danger">
                                            </form>
                                        </div>
                                    </article>
                                </li>

                            <?php
                            }
                        }
                        ?>
                            
                    <?php
                    }
                    ?>
                </ul>
            </section>
        </main>

        <?php
        }
        else {

            header('Location: connexion.php');
        }
        ?>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>